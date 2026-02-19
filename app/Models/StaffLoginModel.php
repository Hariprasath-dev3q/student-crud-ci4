<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffLoginModel extends Model
{

  protected $table = 'staff';
  protected $allowedFields = ['teacher_name', 'email', 'password'];

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
      return false;
    }

    if (empty($student['password'])) {
      return false;
    }

    $storedPassword = $student['password'];

    $decryptedPassword = $this->decryptText($storedPassword);

    if ($decryptedPassword === $password) {
      return $student;
    } elseif ($storedPassword === $password) {
      return $student;
    }
    return false;
  }

public function staffSignup($email, $password, $teacherName)
{
    $existingUser = $this->where('email', $email)->first();

    if ($existingUser) {
        return false;
    }

    $this->insert([
        'teacher_name' => $teacherName,
        'email'       => $email,
        'password'    => $this->encryptText($password)
    ]);

    return true;
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
