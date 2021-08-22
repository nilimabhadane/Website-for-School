<?php
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();
 
 $date=date('Y-m-d');
 $result=mysqli_query($conn,"select * from case_master  where `ID`='".$_GET['case_no']."'");
 $case_master=mysqli_fetch_array($result);
 


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lawyers | Services</title>
		
		
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" >

		<link rel="stylesheet" href="style.css">
		

	</head>


	<body>
		
		<div id="site-content">
			
	<?php include_once("includes/header.php"); ?>

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Case Details</h2>
<table border="1" style="width:100%;">
    
    <tbody>
      <tr>
        <td style="text-align: center;">Case No </td>
        <td style="padding:10px;"> <?php echo $case_master['ID']; ?></td>
        
      </tr>
      <tr>
        <td style="text-align: center;">Victem Name</td>
        <td style="padding:10px;"> <?php echo $case_master['victem_name']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;">Court Name</td>
        <td style="padding:10px;"> <?php echo $case_master['court_name']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;">Case Date</td>
        <td style="padding:10px;"> <?php echo $case_master['date']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;">Complaint </td>
        <td style="padding:10px;"> <?php echo $case_master['complaint']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;">FIR NO </td>
        <td style="padding:10px;"> <?php echo $case_master['fir_no']; ?></td>
        
      </tr>
      
      <tr>
        <td style="text-align: center;">FIR Date </td>
        <td style="padding:10px;"> <?php echo $case_master['fir_date']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;"> Police Station Name </td>
        <td style="padding:10px;"> <?php echo $case_master['police_station_name']; ?></td>
        
      </tr>
       <tr>
        <td style="text-align: center;"> Case Details </td>
        <td style="padding:10px;"> <?php echo $case_master['case_details']; ?></td>
        
      </tr>

       <tr>
        <td style="text-align: center;"> Investigation Officer Name </td>
        <td style="padding:10px;"> <?php echo $case_master['investigation_officer']; ?></td>
        
      </tr>

       <tr>
        <td style="text-align: center;"> Post </td>
        <td style="padding:10px;"> <?php echo $case_master['post']; ?></td>
        
      </tr>

       <tr>
        <td style="text-align: center;"> Judge Name </td>
        <td style="padding:10px;"> <?php echo $case_master['judge_name']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;"> Government Advocate Name </td>
        <td style="padding:10px;"> <?php echo $case_master['govt_adv_name']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;"> Victem Advocate Name </td>
        <td style="padding:10px;"> <?php echo $case_master['victem_adv_name']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;"> Vitness 1 </td>
        <td style="padding:10px;"> <?php echo $case_master['vitness1']; ?></td>
        
      </tr>

      <tr>
        <td style="text-align: center;"> Vitness 2 </td>
        <td style="padding:10px;"> <?php echo $case_master['vitness2']; ?></td>
        
      </tr>
      
    </tbody>
  </table>
			<br/>			
			
						<div class="row">
							<div class="col-md-12">
                  <h2> hearing history </h2>



<?php 

$result=mysqli_query($conn,"select * from hearing_master where `case_no`='".$_GET['case_no']."'");
if(mysqli_num_rows($result)>0){
while($rows=mysqli_fetch_array($result)){

?>




								<div class="feature boxed">
									<header>
										<img src="images/icon-4.png" class="feature-icon">
										<div class="feature-title-copy">
											<h2 class="feature-title"> <?php echo $rows['hearing_date'];?></h2>
											<small><?php 

                              if(!empty($rows['description'])){
									echo $rows['description'];
								}else{

									echo "this is First hearing date";
								}


									?></small>
										</div>
									</header>
									
								</div>

<?php }

}

?>





							</div>
							
							
						</div>

						<div class="cta">
							if you want more details please - <a href="contact.php">Contact Us</a>
						</div>
					</div> 
				</div>

			</main> <!-- .main-content -->
<?php include_once("includes/footer.php"); ?>

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>