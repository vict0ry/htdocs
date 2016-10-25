<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.php';

class auth{

  function __construct(){
    if(getGet('logout')){
      $this->logout();
    }
    else if(getPost('email') && getPost('password')){
      $this->login();
    }
    else{
      echo 'Acces forbidden !';
    }
  }

  public function logout(){
      unset($_COOKIE['login']);
      unset($_COOKIE['password']);
      setcookie('login', null, -1, '/');
      setcookie('password', null, -1, '/');
      header('Location: /');
      die();
  }

  public function login(){
      setcookie('login', getPost('email'), time() + (86400 * 30), "/"); // 86400 = 1 day
      setcookie('password', md5(getPost('password')), time() + (86400 * 30), "/"); // 86400 = 1 day
      header('Location: /');
      die();
  }
}

$auth = new auth();
