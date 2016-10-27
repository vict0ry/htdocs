<?php
namespace BaseTeacher;
 // error_reporting( ~E_NOTICE ); // avoid notice
 require_once './includes/config.php';
class Teacher{
 protected $firstName;
 protected $lastName;
 protected $gender;
 protected $number;
 protected $nativeLanguage;
 protected $topicName;
 protected $description;
 protected $youWillTeach;
 protected $price;
 protected $teachingTime;
 protected $teachingDays;
 protected $freeDays;
 protected $uniqueHash;
 protected $teacher;
 protected $imgFile;
 protected $tmp_dir;
 protected $imgSize;
 protected $upload_dir;
 protected $imgExt;
 protected $valid_extensions;
 protected $userpic;
 
 function __construct(){
  $this->firstName = $_POST['firstName'];
  $this->lastName = $_POST['lastName'];
  $this->gender = $_POST['gender'];
  $this->number = $_POST['mobile'];
  $this->nativeLanguage = $_POST['nativeLanguage'];
  $this->topicName = $_POST['topicName'];
  $this->description = $_POST['description'];
  $this->youWillTeach = $_POST['youWillTeach'];
  $this->price = $_POST['price'];
  $this->teachingTime = $_POST['minutes'];
  $this->teachingDays = $_POST['freeDay'];
  $this->freeDays = json_encode($this->teachingDays);
  $this->uniqueHash = md5(uniqid());
  $this->teacher = true;

  $this->imgFile = $_FILES['user_image']['name'];
  $this->tmp_dir = $_FILES['user_image']['tmp_name'];
  $this->imgSize = $_FILES['user_image']['size'];

  if(empty($this->imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $this->upload_dir = './img/avatar/'; // upload directory
   $this->imgExt = strtolower(pathinfo($this->imgFile,PATHINFO_EXTENSION)); // get image extension
   $this->valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   $this->userpic = md5($this->lastName.$this->firstName.rand(100000,10000000)).".".$this->imgExt;
   if(in_array($this->imgExt, $this->valid_extensions)){
    if($this->imgSize < 5000000)    {
     move_uploaded_file($this->tmp_dir,$this->upload_dir.$this->userpic);
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
}
?>
