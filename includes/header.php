<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="Company Name" class="logo">
						<div class="branding-copy">
							<h1 class="site-title">Court Diary</h1>
							<small  class="site-description">this is demo project</small>
						</div>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item <?php if(!isset($_GET['type'])){echo "current-menu-item";} ?>"><a href="index.php">Home</a></li>
                            
                            <li class="menu-item <?php if($_GET['type']=="today_hearing"){echo "current-menu-item";} ?>"><a href="today_hearing.php?type=today_hearing">Today Hearing</a></li>

                            <li class="menu-item <?php if($_GET['type']=="upcomming_hearing"){echo "current-menu-item";} ?>"><a href="upcomming_hearing.php?type=upcomming_hearing">Upcomming Hearing</a></li>

                           

                            <li class="menu-item <?php if($_GET['type']=="advocate"){echo "current-menu-item";} ?>"><a href="advocate.php?type=advocate">Government Advocates</a></li>

							 <li class="menu-item <?php if($_GET['type']=="contact"){echo "current-menu-item";} ?>"><a href="contact.php?type=contact">Contact Us</a></li>


						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> 