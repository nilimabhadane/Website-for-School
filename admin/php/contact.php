<?php
include("config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

 if(isset($_POST['name'])){
 	extract($_POST);
 	$date=date('Y-m-d');
 	$time=date('h:i a');
   $result=mysqli_query($conn,"insert into contact(`ID`,`name`,`email`,`mobile`,`message`,`date`,`time`) values(NULL,'$name','$email','$mobile','$message','$date','$time')");
  if($result){
   echo "<div style='padding:10px;border:1px solid green;' class='alert alert-success'>Your Request has been submited - i will contact you as soon as possible thanks.</div><br/>";

  }else{
   echo "<div style='padding:10px;border:1px solid red;' class='alert alert-success'>your request not be done</div><br/>";
  }
   
 }

 
?>