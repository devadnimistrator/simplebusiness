<?php
	if (!isset($PHP_SELF)) $PHP_SELF = $_SERVER['PHP_SELF'];
	$current_page = basename($PHP_SELF);
?>
			<div class="header">
				<div class="container">
					<!-- Logo -->
					<a class="logo" href="index.php"> <img src="assets/img/logo_img.jpg" alt="ANIT"> </a>
					<!-- End Logo -->

					<!-- Topbar -->
					<div class="topbar">
						<ul class="loginbar pull-right">
							<li>
								<a href="login.php">Login</a>
								or
								<a href="signup.php">Register</a>
							</li>
						</ul>
					</div>
					<!-- End Topbar -->

					<!-- Toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="fa fa-bars"></span>
					</button>
					<!-- End Toggle -->
				</div><!--/end container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
					<div class="container">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<li class="<?php echo ($current_page == 'index.php' ? 'active' : ''); ?>">
								<a href="index.php"> HOME </a>
							</li>
							<!-- End Home -->

							<!-- ABOUT US -->
							<li class=" <?php echo (($current_page == 'about us.php') ? 'active' : ''); ?>">
								<a href="about us.php"> ABOUT US </a>
							</li>
							<!-- End ABOUT US -->
							
							<!-- SERVICE -->
							<li class="<?php echo ($current_page == 'service.php' ? 'active' : ''); ?>">
								<a href="service.php"> SERVICE </a>
							</li>
							<!-- End SERVICE -->
							
							<!-- PORTOFOLIO -->
							<li class="<?php echo ($current_page == 'portfolio.php' ? 'active' : ''); ?>">
								<a href="portfolio.php"> PORTFOLIO </a>
							</li>
							<!-- End PORTOFOLIO -->
							
							<!-- Contact US -->
							<li class="<?php echo ($current_page == 'contact.php' ? 'active' : ''); ?>">
								<a href="contact.php"> CONTACT US </a>
							</li>
							<!-- End Contact US -->
							
						</ul>
					</div><!--/end container-->
				</div><!--/navbar-collapse-->
			</div>
			<!--=== End Header ===-->