<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentLoginModel extends Model
{

  protected $table = 'studentregisterationform';
  protected $allowedFields = ['rollNo', 'fname', 'lname', 'father_name', 'dob', 'mobile', 'email', 'password', 'gender', 'department', 'course', 'city', 'address'];

  public function getallStudents()
  {
    return $this->findAll();
  }

  public function verifyLogin($email, $password): bool|array
  {
    $email = trim($email);
    $password = trim($password);

    // Use parameterized query to prevent SQL injection
    $student = $this->where('email', $email)->first();

    if (!$student) {
      log_message('warning', "Student not found for email: {$email}");
      return false;
    }

    // Check if password field exists and is not empty
    if (empty($student['password'])) {
      log_message('error', "No password stored for email: {$email}");
      return false;
    }

    $storedPassword = $student['password'];
    log_message('debug', "Stored password (encrypted): {$storedPassword}");
    log_message('debug', "Attempting login with password: {$password}");

    // Try to decrypt the password
    $decryptedPassword = $this->decryptText($storedPassword);
    log_message('debug', "Decrypted password: " . var_export($decryptedPassword, true));

    // Check if password matches (handle both encrypted and plain text)
    if ($decryptedPassword === $password) {
      // Password was encrypted
      log_message('info', "Login successful for email: {$email} (encrypted match)");
      return $student;
    } elseif ($storedPassword === $password) {
      // Password was stored as plain text
      log_message('warning', "Plain text password found for email: {$email}. Consider encrypting stored passwords.");
      return $student;
    }

    log_message('warning', "Invalid password for email: {$email}. Decrypted: " . var_export($decryptedPassword, true) . " | Provided: {$password}");
    return false;
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
