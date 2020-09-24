<?php
class UserModel
{
 private $id;
 private $name; // set, get
 private $email;
 private $password;
 private $profile_image;
 private $is_confirmed;
 private $is_active;
 private $is_login;
 private $date;
 private $token;

 public function setId($id)
 {
     $this->id = $id;
 }

 public function getId()
 {
     return $this->id;
 }

 public function setName($name)
 {
  $this->name = $name;
 }

 public function getName()
 {
  return $this->name;
 }

 public function setEmail($email)
 {
  $this->email = $email;
 }

 public function getEmail()
 {
  return $this->email;
 }

 public function setPassword($password)
 {
  $this->password = $password;
 }

 public function getPassword()
 {
  return $this->password;
 }

 public function setToken($token)
 {
  $this->token = $token;
 }

 public function getToken()
 {
  return $this->token;
 }

 public function setProfileImage($profileImage)
 {
  $this->profile_image = $profileImage;
 }

 public function getProfileImage()
 {
  return $this->profile_image;
 }

 public function setIsActive($is_active)
 {
  $this->is_active = $is_active;
 }

 public function getIsActive()
 {
  return $this->is_active;
 }

 public function setIsLogin($is_login)
 {
  $this->is_login = $is_login;
 }

 public function getIsLogin()
 {
  return $this->is_login;
 }

 public function setIsConfirmed($is_confirmed)
 {
  $this->is_confirmed = $is_confirmed;
 }

 public function getIsConfirmed()
 {
  return $this->is_confirmed;
 }

 public function setDate($date)
 {
  $this->date = $date;
 }

 public function getDate()
 {
  return $this->date;
 }

 public function toArray()
 {
  return [
   "id"            => $this->getId(),
   "name"          => $this->getName(),
   "email"         => $this->getEmail(),
   "password"      => $this->getPassword(),
   "token"         => $this->getToken(),
   "profile_image" => $this->getProfileImage(),
   "is_active"     => $this->getIsActive(),
   "is_login"      => $this->getIsLogin(),
   "is_confirmed"  => $this->getIsConfirmed(),
   "created_date"  => $this->getDate(),
  ];
 }


}