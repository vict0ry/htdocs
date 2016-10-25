<?php
 require_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.php';
 // require_once $_SERVER["DOCUMENT_ROOT"].'/includes/security.php';
 // require_once $_SERVER["DOCUMENT_ROOT"].'/auth.php';

 if(isset($_POST['btnsave']))
 {
  $fullName = $_POST['name'];
  $getNameAndSurname = explode(" ",$fullName);
if(strpos($fullName, ' ') !== false) {
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

  // if (!$user->isLoggedIn()){
    if(!isset($errMSG))
    {
     $newStudent = $DB_con->prepare("INSERT INTO user (Name, Surname, Email, Number, user_id) VALUES (:Name, :Surname, :Email, :Number, :userId)");
    //  var_dump($newTeacher);
    //  die();
     $newStudent->bindParam(':Name',$name);
     $newStudent->bindParam(':Surname',$surname);
     $newStudent->bindParam(':Email',$email);
     $newStudent->bindParam(':Number',$number);
     $newStudent->bindParam(':userId',$uniqueHash);
     $newStudent->execute();


     $request = $DB_con->prepare("INSERT INTO request (Rdescription,Rsubject,RpriceFrom,RpriceTo,Rdate,user_id)
                               VALUES(:Rdescription, :Rsubject, :RpriceFrom, :RpriceTo, NOW(), :userId)");
     $request->bindParam(':Rdescription',$description);
     $request->bindParam(':Rsubject',$youWillStudy);
     $request->bindParam(':RpriceFrom',$priceFrom);
     $request->bindParam(':RpriceTo',$priceTo);
     $request->bindParam(':userId',$uniqueHash);
     $request->execute();
    }
  }
// }

// else {
//   die('error');
// }
?>
