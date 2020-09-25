<?php

class UserValidator
{
 private $data;
 private $errors        = [];
 private static $fields = ['name', 'email', 'password'];

 public function __construct($post_data)
 {
  $this->data = $post_data;
 }

 public function validateForm()
 {
  foreach (self::$fields as $field) {
   if (!array_key_exists($field, $this->data)) {
    trigger_error($field . " is not present in data");
    return;
   }
  }
  $this->validateUserName();
  $this->validateEmail();
  $this->validatePassword();
  return $this->errors;
 }

 private function validateUserName()
 {
  $val = trim($this->data['name']);
  if (empty($val)) {
   $this->addError('name-err', 'User name can not be empty !');
  } else {
   if (!preg_match('/^[a-zA-Z0-0 ]{6,25}$/', $val)) {
    $this->addError('name-err', 'User name must be 6 to 25 chars & alphabatic !');
   }
  }
 }

 private function validateEmail()
 {
  $val = trim($this->data['email']);
  if (empty($val)) {
   $this->addError('email-err', 'Email can not be empty');
  } else {
   if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
    $this->addError('email-err', 'email must be a valid email.');
   }
  }
 }

 private function validatePassword()
 {
  // Validate password strength
  $password     = trim($this->data['password']);
  $uppercase    = preg_match('@[A-Z]@', $password);
  $lowercase    = preg_match('@[a-z]@', $password);
  $number       = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
  if (empty($password)) {
   $this->addError('password-err', 'Password can not be empty.');
  } else {
   if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $this->addError('password-err', 'Password should be at least 8 characters , <br> at least one upper case letter, one lower case letter , one number, and one special character.');
   }
  }
 }

 private function addError($key, $val)
 {
  $this->errors[$key] = $val;
 }

}