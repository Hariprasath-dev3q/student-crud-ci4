<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentLoginModel extends Model
{

  protected $table = 'staff';
  protected $allowedFields = ['teacherName','email', 'password'];

  public function getallStaffs()
  {
    return $this->findAll();
  }

  public function verifyLogin($email, $password): bool|array
  {
    $email = trim($email);
    $password = trim($password);
    $student = $this->where('email', $email)->first();

    if (!$student) {
      log_message('warning', "Student not found for email: {$email}");
      return false;
    }

    if (empty($student['password'])) {
      log_message('error', "No password stored for email: {$email}");
      return false;
    }

    $storedPassword = $student['password'];
    log_message('debug', "Stored password (encrypted): {$storedPassword}");
    log_message('debug', "Attempting login with password: {$password}");

    $decryptedPassword = $this->decryptText($storedPassword);
    log_message('debug', "Decrypted password: " . var_export($decryptedPassword, true));

    if ($decryptedPassword === $password) {
      log_message('info', "Login successful for email: {$email} (encrypted match)");
      log_message('debug', "Student data returned: " . print_r($student, true));
      return $student;
    } elseif ($storedPassword === $password) {
      log_message('warning', "Plain text password found for email: {$email}. Consider encrypting stored passwords.");
      return $student;
    }

    log_message('warning', "Invalid password for email: {$email}. Decrypted: " . var_export($decryptedPassword, true) . " | Provided: {$password}");
    return false;
  }

  public function staffSignup($email, $password, $teacherName)
  {
    $result = $this->db->table('staff')
      ->insert([
        'teacherName' => $teacherName,
        'email' => $email,
        'password' => $this->encryptText($password)
      ]);
    return $result;
  }


  private $encryptionKey = 'hnZs6%aExcFrSyMM';

  public function encryptText(string $text): string
  {
    $cipher = 'aes-256-cbc';
    $hashLength = substr(hash('sha256', $this->encryptionKey), 0, 16);

    $encrypted = openssl_encrypt($text, $cipher, $this->encryptionKey, OPENSSL_RAW_DATA, $hashLength);

    return base64_encode($encrypted);
  }

  public function decryptText(string $encryptedText): string|false
  {
    $cipher = 'aes-256-cbc';
    $hashLength = substr(hash('sha256', $this->encryptionKey), 0, 16);

    $decoded = base64_decode($encryptedText);

    return openssl_decrypt($decoded, $cipher, $this->encryptionKey, OPENSSL_RAW_DATA, $hashLength);
  }
}
