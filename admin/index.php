<?php 
session_start();
if(isset($_SESSION['ID'])){
echo  "<script>location='dashboard.php?dashboard' </script>";
}
?>
<!DOCTYPE html><html>
<head>
<meta charset="utf-8" />
<title><?php include 'include/title.php'; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="Health Guide" name="description" /><meta content="Login Union" name="" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="img/favicon.png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

<style>
html {
    overflow-x: hidden;
    position: relative;
    min-height: 100%;
  background-color: black;
}

body {
    background: #f5f5f500;
    font-family: 'PT Sans Caption', sans-serif;
    margin: 0;
}
</style>
</head>
<body>
<div class="accountbg">
</div>
<div class="wrapper-page">
<br/><br/>
<div class="panel panel-color panel-primary panel-pages" style="background-color:#8e8e8e54;">
<div class="panel-body">
<h3 style="width:100%;background-color:#3a499a;border-radius:10px;" class="text-center m-t-0 m-b-15"> 
<a  href="index.php" class="logo logo-admin">
<span style="color:white;">
User Login </span> </a></h3>


<div style="text-align:center;color:green;" id="msg">
						</div>

<form id="login" class="form-horizontal m-t-20" action="#">
     <div class="form-group"><div class="col-xs-12"> 
       <input class="form-control" type="text" required="" name="username" placeholder="Email Address"></div>

      </div>

    <div class="form-group">
      <div class="col-xs-12"> 
	  <input class="form-control" type="password" required="" placeholder="Password"  name="password">
	 </div>
	</div>

<div class="form-group">

   <div class="col-xs-12">
      <div class="checkbox checkbox-primary"> <input id="checkbox-signup" type="checkbox"> <label for="checkbox-signup"> Remember me </label>
	  </div>
	  
	</div>
</div>
	  
<div class="form-group text-center m-t-40"><div class="col-xs-12"> <button id="btn" class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit"  id="btn">Log In</button>
</div>
</div>
	  
	<div class="form-group m-t-30 m-b-0">
	  
	  <div class="col-sm-7"> 
	     <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
	  </div>
	  
	
	  
</form>

</div>

</div>
</div> 

<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 

<script src="assets/js/detect.js"></script> 
<script src="assets/js/fastclick.js"></script> 
<script src="assets/js/jquery.slimscroll.js"></script> 
<script src="assets/js/jquery.blockUI.js"></script> 
<script src="assets/js/waves.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/jquery.nicescroll.js"></script> 
<script src="assets/js/jquery.scrollTo.min.js"></script> 
<script src="assets/js/app.js"></script> 

<script type="text/javascript">
$(document).ready(function (e) {
	$("#login").on('submit',(function(e) {
		
		
		var div_data =
"<div ><img width='75' src='img/spinner.gif' /></div>";

		
		 $('#spinner').html(div_data);

  $("#btn").html("Please Wait..");

		
		e.preventDefault();
		$.ajax({
        	url: "php/login.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				
			$('#msg').show(1000);
                $('#msg').delay(3000).fadeOut();
            
            $('#msg').html(data);	
				
			$("#btn").html(" Login In ");
			
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</body>

</html>