<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.php';

class Security{
  private $email;
  function __construct($DB_con){
    $this->db = $DB_con;
    if (isset($_COOKIE['login'])){
      $this->email = $_COOKIE['login'];
    }
  }
  function isLoggedIn(){
      if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
        $login =  $_COOKIE['login'];
        $password = $_COOKIE['password'];
        $stmt_user = $this->db->prepare("SELECT password FROM user where email = '$login'");
        $stmt_user->execute();
        $user = $stmt_user->fetch(PDO::FETCH_ASSOC);
        if ($password === $user['password']){
          return true;
        }
        else {
          return false;
        }
      }
      else {
        return false;
      }
    }
    public function isTeacher(){
      $exist = $this->db->prepare("SELECT * FROM user WHERE email = :Email");
      $exist->bindParam(':Email',$this->email);
      $exist->execute();
      $result = $exist->fetch();
      $result = $result['isTeacher'];
      if($result){
        return true;
      }
      else{
        return false;
      }
    }
}
$user = new Security($DB_con);
