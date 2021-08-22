<?php
require_once("include/session.php");
$conn=mysqli_connect("localhost","root","","school");
$qry=mysqli_query($conn,"select count(ID) from add_teacher");
while ($res = mysqli_fetch_array($qry)) 
{
	$tch=$res[0];
	
}
$qry1=mysqli_query($conn,"select count(ID) from add_student");
while ($res1 = mysqli_fetch_array($qry1)) 
{
	$st=$res1[0];
}

?>
<!DOCTYPE html><html>
<head>
<meta charset="utf-8" />
<title><?php include 'include/title.php'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="online travel and room Booking" name="description" /><meta content="Login Union" name="shahid husen" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="assets/images/favicon.ico">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="fixed-left fixed-left-void">

	<div id="wrapper" class="forced enlarged">


 <?php include "include/header_top.php"; ?>
 
 
	<?php include "include/header_side.php"; ?>

<div class="content-page">

   <div class="content">
     <div class="">
	   <div class="page-header-title">
	      <h4 class="page-title">Dashboard</h4>
	   </div>
     </div>

 <div class="page-content-wrapper ">
 
 <div class="container">
 
 <div class="row">
 
       <!--div class="col-sm-6 col-lg-3 zoomIn  animated">
	       <div class="panel text-center">
		   
		   <div class="panel-heading">
		     <h4 class="panel-title text-muted font-light">User</h4>
		   </div>

		  <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-account-circle text-danger m-r-10"></i><b><span class='case_count'>0</span></b></h2><p class="text-muted m-b-0 m-t-20">Total User</p>
		  </div>

 
	       </div>
       </div-->


       <div class="col-sm-6 col-lg-3 zoomIn  animated">
	       <div class="panel text-center">
		   
		   <div class="panel-heading">
		     <h4 class="panel-title text-muted font-light">Teacher</h4>
		   </div>

		  <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-account-circle text-danger m-r-10"></i><b><span><?php echo $tch; ?>
		  </span></b></h2><p class="text-muted m-b-0 m-t-20">Total Teacher</p>
		  </div>

 
	       </div>
       </div>


      <div class="col-sm-6 col-lg-3 zoomIn  animated">
	       <div class="panel text-center">
		   
		   <div class="panel-heading">
		     <h4 class="panel-title text-muted font-light"> Student </h4>
		   </div>

		   <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-account-circle text-danger m-r-10"></i><b><span><?php echo $st; ?></span></b></h2><p class="text-muted m-b-0 m-t-20"> Total Student </p>
		  </div>


		   
	       </div>
       </div>



       <!--div class="col-sm-6 col-lg-3 zoomIn  animated">
	       <div class="panel text-center">
		   
		   <div class="panel-heading">
		     <h4 class="panel-title text-muted font-light"> Marks</h4>
		   </div>

		   <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-account-circle text-success m-r-10"></i><b><span class='hearing_entries'>0</span></b></h2><p class="text-muted m-b-0 m-t-20"> Total Marks </p>
		  </div>


		   
	       </div>
       </div-->



       


       <!--div class="col-sm-6 col-lg-3 zoomIn  animated">
	       <div class="panel text-center">
		   
		   <div class="panel-heading">
		     <h4 class="panel-title text-muted font-light"> Today Hearing</h4>
		   </div>

		  <div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-account-circle text-primary m-r-10"></i><b><span class='today_hearing'>0</span></b></h2><p class="text-muted m-b-0 m-t-20"> Total Today Hearing </p>
		  </div>


		   
	       </div>
       </div-->
       

 

</div>
	
	 </div>
	 
	 </div>
	 
	 </div>
	 
	 
	
	 
	 </div>
</div> 

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/notify.js"></script> 	

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script> 

<script src="assets/js/detect.js"></script> <script src="assets/js/fastclick.js"></script> <script src="assets/js/jquery.slimscroll.js"></script> <script src="assets/js/jquery.blockUI.js"></script> <script src="assets/js/waves.js"></script> <script src="assets/js/wow.min.js"></script> <script src="assets/js/jquery.nicescroll.js"></script> <script src="assets/js/jquery.scrollTo.min.js"></script> 



 <script src="assets/plugins/raphael/raphael-min.js"></script> 
 <script src="assets/js/app.js"></script>

<?php include "include/footer.php"; ?>

	 
</body>

</html>