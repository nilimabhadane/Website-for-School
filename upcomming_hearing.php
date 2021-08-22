<?php
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

 $date=date('Y-m-d');
 $result=mysqli_query($conn,"select *,(select victem_name from case_master where ID=hearing_master.case_no) as victem_name,(select judge_name from case_master where ID=hearing_master.case_no) as judge_name from hearing_master where `date` not in ('$date') and `date` not in ('empty')");

 


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>Lawyers | Experience</title>
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
						<h2 class="entry-title">Upcomming Hearing</h2>
						<p>Hearings normally begin at 9:30 a.m. However, the Court may start at 9:00 a.m. without prior public notice. Where two cases are scheduled on a given day, the second case may be heard either immediately after the first one or at 2:00 p.m. For up-to-date information on the hearing time of a given case, please consult the docket information for the case in question on the SCC Case Information page on the morning of the hearing.</p>
						

						<div class="timeline">

<?php 


if(mysqli_num_rows($result)>0){
while($rows=mysqli_fetch_array($result)){


?>

							<div style="height: 200px" class="milestone">
						<a href="details.php?case_no=<?php echo $rows['case_no']; ?>">		
								<h3 class="year">Case No: <?php echo $rows['case_no']; ?></h3>
								<h2 class="milestone-title"><?php echo $rows['victem_name'] ?> </h2>
								<p style="color:white;">Judge Name : <?php echo $rows['judge_name']; ?><br/>

									<?php echo $rows['hearing_date']; ?>
									


								</p>

					  </a>
							</div>
<?php }



}else{ ?>	

<div style="height: 200px" class="milestone">
								<h3 class="year">No Record Found</h3>
								
								
							</div>
							
			<?php } ?>			</div>

					

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