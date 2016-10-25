<?php
 require_once './includes/config.php';
 require_once './includes/security.php';

 if(isset($_POST['btnsave']))
 {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $number = $_POST['mobile'];
  $nativeLanguage = $_POST['nativeLanguage'];
  $topicName = $_POST['topicName'];
  $description = $_POST['description'];
  $youWillTeach = $_POST['youWillTeach'];
  $price = $_POST['price'];
  $teachingTime = $_POST['minutes'];
  $teachingDays = $_POST['freeDay'];
  $teachingDays = json_encode($teachingDays);
  $uniqueHash = md5(uniqid());

  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];


  if(empty($imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $upload_dir = './img/avatar/'; // upload directory

   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

   // rename uploading image
   $userpic = md5($lastName.$firstName.rand(100000,10000000)).".".$imgExt;

   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   }
  }
  if ($user->isLoggedIn()){
    if(!isset($errMSG))
    {
     $newTeacher = $DB_con->prepare("UPDATE user
                              SET Name = :Name, Surname = :Surname, Gender = :Gender, Number = :Number, MotherTongue = :MotherTongue, Avatar = :Avatar, isTeacher = 1 WHERE email= :Login");
    //  var_dump($newTeacher);
    //  die();
     $newTeacher->bindParam(':Name',$firstName);
     $newTeacher->bindParam(':Surname',$lastName);
     $newTeacher->bindParam(':Gender',$gender);
     $newTeacher->bindParam(':Number',$number);
     $newTeacher->bindParam(':MotherTongue',$nativeLanguage);
     $newTeacher->bindParam(':Avatar',$userpic);
     $newTeacher->bindParam(':Login',$_COOKIE['login']);

     $getUserId = $DB_con->prepare("SELECT user_id FROM user WHERE email = :Email");
     $getUserId->bindParam(':Email',$_COOKIE['login']);
     $getUserId->execute();
     $userId = $getUserId->Fetch();
     $userId = $userId['user_id'];

     $offer = $DB_con->prepare("INSERT INTO offers(ID,OName,user_id,ODescription,OLanguage,OPrice,OTime,ODate)
                               VALUES('', :Name, :UserId, :Description, :Language, :Price, :Time, NOW())");
     $offer->bindParam(':Name',$topicName);
     $offer->bindParam(':UserId',$userId);
     $offer->bindParam(':Description',$description);
     $offer->bindParam(':Language',$youWillTeach);
     $offer->bindParam(':Price',$price);
     $offer->bindParam(':Time',$teachingTime);

     if($newTeacher->execute() && $offer->execute())
     {
      $successMSG = "new record succesfully inserted ...";
      // header("refresh:5;index.php"); // redirects image view page after 5 seconds.
     }
     else
     {
      $errMSG = "error while inserting....";
     }
    }
  }
}

else {
  die('error');
}
?>
