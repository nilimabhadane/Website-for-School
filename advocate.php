<?php
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

 $date=date('Y-m-d');
 $result=mysqli_query($conn,"select * from advocate");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lawyers | About Us</title>
		
	
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
						<h2 class="entry-title">Govenment Advcate List</h2>
						<p>Advocates are the only lawyers with rights of audience in the courts of the Isle of Man. An advocate's role is to give advice on all matters of law: it may involve representing a client in the civil and criminal courts or advising a client on matters such as matrimonial and family law, trusts and estates, regulatory matters, property transactions and commercial and business law. In court, advocates wear a horsehair wig, stiff collar, bands and a gown in the same way as barristers do elsewhere</p>
<?php 


if(mysqli_num_rows($result)>0){
while($rows=mysqli_fetch_array($result)){


?>
						<div class="team">
							<figure class="team-image"><img src="admin/uploads/<?php echo $rows['image']; ?>" alt="person-1"></figure>
							<h5 ><?php echo $rows['name']; ?></h5>
							<small class="team-desc"><?php echo $rows['education']; ?></small>
							
						</div>
						

<?php

}
}
?>
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