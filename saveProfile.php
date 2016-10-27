<?php
use BaseTeacher\Teacher;
require_once '/classes/Teacher.Class.php';
require_once './includes/config.php';

class saveNewTeacher extends Teacher{
function __construct() {
    parent::__construct();
}
    public function save($DB_con){
   if(!isset($errMSG))
    {
    $user = $DB_con->prepare("INSERT INTO user(user_id,Name,Surname,Gender,Number,MotherTongue,Avatar,isTeacher)
                             VALUES(:UserId, :Name, :Surname, :Gender, :Number, :MotherTongue, :Avatar, :isTeacher)");

   $user->execute([
       'UserId'       => $this->uniqueHash,
       'Name'         => $this->firstName,
       'Surname'      => $this->lastName,
       'Gender'       => $this->gender,
       'Number'       => $this->number,
       'MotherTongue' => $this->nativeLanguage,
       'Avatar'       => $this->userpic,
       'isTeacher'    => $this->teacher
       ]);

   $offer = $DB_con->prepare("INSERT INTO offers(ID,OName,user_id,ODescription,OLanguage,OPrice,OTime,ODate,FreeDays)
                             VALUES('', :Name, :UserId, :Description, :Language, :Price, :Time, NOW(), :FreeDays)");
 
   $offer->execute([
       'Name'           => $this->topicName,
       'UserId'         => $this->uniqueHash,
       'Description'    => $this->description,
       'Language'       => $this->youWillTeach,
       'Price'          => $this->price,
       'Time'           => $this->teachingTime,
       'FreeDays'       => $this->freeDays
   ]);
}
}
}
$newTeacher = new saveNewTeacher();
