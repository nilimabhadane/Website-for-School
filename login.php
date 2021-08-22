<?php
include 'config.php';



if(isset($_POST['submit']))
{

	$un=$_POST['email'];
	$ps=$_POST['password'];

	$qry=mysqli_query($conn,"select * from add_student where uname='$un' and pass='$ps'");

	while ($res= mysqli_fetch_array($qry)) 
	{
		$unn=$res['uname'];
		$pss=$res['pass'];

	if($un=$unn && $ps==$pss)
	{
		echo "<script>alert('Login successfully');</script>";
		echo "<script>window.location.href='index1.html';</script>";
	}	

	}
		echo "<script>alert('Login Failed');</script>";
		echo "<script>window.location.href='index.html';</script>";
}



?>