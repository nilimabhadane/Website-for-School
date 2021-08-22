<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lawyers | Contact</title>
		
		<!-- Loading third party fonts -->
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
						<h2 class="entry-title">contact Details</h2>

						<div class="row contact-info">
							<div class="col-md-6">
								<div class="map-container">



									<div class="map">
										
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56620.90467067329!2d74.7298934615614!3d20.88652596942215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5f2c571bb47%3A0x5827ae11b9d7cb1c!2sDhule%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1520056842441" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


									</div>


									<div class="row">
										<div class="col-md-4">
											<address>
												<strong>Address</strong>
												<p>Logicunion Technology dhule. <br>31,vadjai Road . <br>Dhule, 424001</p>
											</address>
										</div>
										<div class="col-md-8">
											<div class="contact">
												<strong>Contact</strong>
												<p>
													<a href="tel:532930098891">9271431483</a>
													<a href="mailto:shahidhusen31@gmail.com">shahidhusen31@gmail.com</a> <br>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-md-offset-1">

                  <div id="msg"></div>
								<form id="frm_add"  action="" method="post" class="contact-form">
									<input type="text" name="name" id="name" placeholder="Name..." required>
									<input type="text" name="email" id="email" placeholder="Email..." required>
									<input type="text" name="mobile" id="mobile" placeholder="Mobile number...." required>
									<textarea name="message" id="message" placeholder="Message..." required></textarea>
									<div class="text-right">
										<input type="submit" value="Send message">
									</div>
								</form>


							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

<?php include_once("includes/footer.php"); ?>
			
		</div> <!-- #site-content -->
        <script src="js/jquery-1.11.1.min.js"></script>

        <script type="text/javascript">
       $(document).ready(function(){


          $("#frm_add").on('submit',(function(e) {

          	
            
        e.preventDefault();
        $.ajax({
            url: "admin/php/contact.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {

            	$("#msg").html(data);
	          
            }           
       });
    }));

       }); 	
        	
         

        </script>
		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>