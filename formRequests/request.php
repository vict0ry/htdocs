<?php
 require_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.php';
 require_once $_SERVER["DOCUMENT_ROOT"].'/classes/User.Class.php';
 require_once $_SERVER["DOCUMENT_ROOT"].'/auth.php';
 // require_once $_SERVER["DOCUMENT_ROOT"].'/includes/security.php';
 require_once $_SERVER["DOCUMENT_ROOT"].'/auth.php';

$student = new User($DB_con);

 if(isset($_POST['btnsave']))
 {
  $fullName = $_POST['name'];
if(strpos($fullName, ' ') !== false) {
    $getNameAndSurname = explode(" ",$fullName);
    $name = $fullName[0];
    $surname = $fullName[1];
  }

  else{
    $name = $fullName;
    $surname = "";
  }

  $number = $_POST['mobile'];
  $description = $_POST['description'];
  $email = $_POST['email'];
  $youWillStudy = $_POST['youWillStudy'];
  $priceFrom = $_POST['priceFrom'];
  $priceTo = $_POST['priceTo'];
  $uniqueHash = md5(uniqid());

     function saveStudent($db,$name,$surname,$email,$number,$uniqueHash){
       $newStudent = $db->prepare("INSERT INTO user (Name, Surname, Email, Number, user_id) VALUES (:Name, :Surname, :Email, :Number, :userId)");
       $newStudent->bindParam(':Name',$name);
       $newStudent->bindParam(':Surname',$surname);
       $newStudent->bindParam(':Email',$email);
       $newStudent->bindParam(':Number',$number);
       $newStudent->bindParam(':userId',$uniqueHash);
       $newStudent->execute();
     }

     function saveStudentRequest($db,$description,$youWillStudy,$priceFrom,$priceTo,$uniqueHash){
       $request = $db->prepare("INSERT INTO request (Rdescription,Rsubject,RpriceFrom,RpriceTo,Rdate,user_id)
                                 VALUES(:Rdescription, :Rsubject, :RpriceFrom, :RpriceTo, NOW(), :userId)");
       $request->bindParam(':Rdescription',$description);
       $request->bindParam(':Rsubject',$youWillStudy);
       $request->bindParam(':RpriceFrom',$priceFrom);
       $request->bindParam(':RpriceTo',$priceTo);
       $request->bindParam(':userId',$uniqueHash);
       $request->execute();
     }
     if ($student->isExist($email)){
       $uniqueHash = $student->_get($email,"user_id");
//       $uniqueHash = $uniqueHash['user_id'];
       saveStudentRequest($DB_con,$description,$youWillStudy,$priceFrom,$priceTo,$uniqueHash);
       $auth->logout();
     }
     else {
       saveStudent($DB_con,$name,$surname,$email,$number,$uniqueHash);
       saveStudentRequest($DB_con,$description,$youWillStudy,$priceFrom,$priceTo,$uniqueHash);
       $auth->logout();
     }



  }
?>
