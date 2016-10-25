<?php

 $DB_HOST = 'localhost';
 $DB_USER = 'root';
 $DB_PASS = '';
 $DB_NAME = 'english';

 try{
  $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e){
  echo $e->getMessage();
 }


function dump($param){
  echo "<pre style='padding: 20px; width: 280px; display: inline-block; background: #eccccc;'>";
    var_dump($param);
  echo "</pre>";
}

function getGet($getParam){
  if (isset($_GET[$getParam])){
    return $_GET[$getParam];
  }
  else {
    return "";
  }
}
function getPost($getParam){
  if (isset($_POST[$getParam])){
    return $_POST[$getParam];
  }
  else {
    return "";
  }
}
