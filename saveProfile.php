<?php
 // error_reporting( ~E_NOTICE ); // avoid notice
 require_once './includes/config.php';

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
}


  if(!isset($errMSG))
  {
   $user = $DB_con->prepare("INSERT INTO user(ID,user_id,Name,Surname,Gender,Number,MotherTongue,Email,Password,Avatar)
                             VALUES('', :UserId, :Name, :Surname, :Gender, :Number, :MotherTongue,'','', :Avatar )");
   $user->bindParam(':UserId',$uniqueHash);
   $user->bindParam(':Name',$firstName);
   $user->bindParam(':Surname',$lastName);
   $user->bindParam(':Gender',$gender);
   $user->bindParam(':Number',$number);
   $user->bindParam(':MotherTongue',$nativeLanguage);
   $user->bindParam(':Avatar',$userpic);

   $offer = $DB_con->prepare("INSERT INTO offers(ID,OName,user_id,ODescription,OLanguage,OPrice,OTime,ODate)
                             VALUES('', :Name, :UserId, :Description, :Language, :Price, :Time, NOW())");
   $offer->bindParam(':Name',$topicName);
   $offer->bindParam(':UserId',$uniqueHash);
   $offer->bindParam(':Description',$description);
   $offer->bindParam(':Language',$youWillTeach);
   $offer->bindParam(':Price',$price);
   $offer->bindParam(':Time',$teachingTime);

   if($user->execute() && $offer->execute())
   {
    $successMSG = "new record succesfully inserted ...";
    // header("refresh:5;index.php"); // redirects image view page after 5 seconds.
   }
   else
   {
    $errMSG = "error while inserting....";
   }
  }
?>
