<?php
class user{
    private $db;
    private $uniqueHash;
    public function __construct($DB_con){
      $this->db = $DB_con;
      $this->uniqueHash = md5(uniqid());
    }
    public function save($email,$password){
        if (!empty($email) && !empty($password)){
            $newUser = $this->db->prepare("INSERT INTO user(Email,Password,user_id) VALUES(:Email, :Password, :UserId)");
            $newUser->bindParam(':Email',$email);
            $newUser->bindParam(':Password',md5($password));
            $newUser->bindParam(':UserId',$this->uniqueHash);
            $newUser->execute();
            return true;
        }
        else{
            return false;
        }
    }
    public function isExist($email){ // check whether user already has been registered
      $exist = $this->db->prepare("SELECT * FROM user WHERE email = :Email");
      $exist->bindParam(':Email',$email);
      $exist->execute();
      $result = $exist->fetchAll();
      if(!empty($result)){
           return true;
       } else {
           return false;
       }
  }
  public function _get($email,$property){
    $get = $this->db->prepare("SELECT $property FROM user WHERE email = :Email");
    $get->bindParam(':Email',$email);
    // $get->bindParam(':Property',$property);
    $get->execute();
    $result = $get->fetch();
    return $result[$property];
  }
}
