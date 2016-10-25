<?php
  abstract class user{
    private $email;
    private $password;
    private $uniqueHash;
    private $login;
    private $logout;

    public function __construct($DB_con){
      $this->db = $DB_con;
      $this->email = $_POST['email'];
      $this->password = md5($_POST['password']);
      $this->uniqueHash = md5(uniqid());
    }

    public function save(){
      if ($this->email && $this->password){
        $newUser = $this->db->prepare("INSERT INTO user(Email,Password,user_id) VALUES(:Email, :Password, :UserId)");
        $newUser->bindParam(':Email',$this->email);
        $newUser->bindParam(':Password',$this->password);
        $newUser->bindParam(':UserId',$this->uniqueHash);
        $newUser->execute();
        setcookie('login', $this->email, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('password', $this->password, time() + (86400 * 30), "/"); // 86400 = 1 day
        return true;
      }
    }
    public function isExist(){ // check whether user already has been registered
    if ($this->email && $this->password){
      $exist = $this->db->prepare("SELECT * FROM user WHERE email = :Email");
      $exist->bindParam(':Email',$this->email);
      $exist->execute();
      $result = $exist->fetchAll();
      if(!empty($result)){
           return true;
       } else {
           return false;
       }
    }
  }
}
