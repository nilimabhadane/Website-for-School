<?php
include_once("php/config.php");
		$db = new dbObj();
        $conn =  $db->getConnstring();

if(isset($_POST['parent_id']))
{
//include("config.php");
//	$db = new dbObj();
//	$conn =  $db->getConnstring();
	
extract($_POST);
		
	$sql=mysqli_query($conn,"select * from `add_student` where rno='$parent_id'");
		
while($row = mysqli_fetch_array($sql))
{
	$name=$row['sname'];

	echo $name;


}
}
if(isset($_POST['parent_id1']))
{
//include("config.php");
//	$db = new dbObj();
//	$conn =  $db->getConnstring();
	
extract($_POST);
		
	$sql=mysqli_query($conn,"select * from `add_student` where rno='$parent_id1'");
		
while($row = mysqli_fetch_array($sql))
{
	$name=$row['sname'];

	echo $name;


}
}
if(isset($_POST['parent_id2']))
{
//include("config.php");
//	$db = new dbObj();
//	$conn =  $db->getConnstring();
	
extract($_POST);
		
	$sql=mysqli_query($conn,"select * from `add_student` where rno='$parent_id2'");
		
while($row = mysqli_fetch_array($sql))
{
	$name=$row['sname'];

	echo $name;


}
}
?>