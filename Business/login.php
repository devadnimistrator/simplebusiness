<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login | BLUE LYNX</title>

		<?php include_once("blocks/meta_tags.php"); ?>
		<?php include_once("blocks/css.php"); ?>
		
		<!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
	</head>

	<body>
		<div class="wrapper">
			<?php include_once("blocks/block_header.php"); ?>

			<!--=== Breadcrumbs ===-->
			<div class="breadcrumbs">
				<div class="container">
					<h1 class="pull-left">Login</h1>
					<ul class="pull-right breadcrumb">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">
							Login
						</li>
					</ul>
				</div><!--/container-->
			</div><!--/breadcrumbs-->
			<!--=== End Breadcrumbs ===-->

			<!--=== Content Part ===-->
			<div class="container content">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<form class="reg-page">
							<div class="reg-header">
								<h2>Login to your account</h2>
							</div>

							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" placeholder="Username" class="form-control">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" placeholder="Password" class="form-control">
							</div>

							<div class="row">
								<div class="col-md-6 checkbox">
									<label>
										<input type="checkbox">
										Stay signed in</label>
								</div>
								<div class="col-md-6">
									<button class="btn-u pull-right" type="submit">
										Login
									</button>
								</div>
							</div>

							<hr>

							<p>
								Forgot username or password? <a class="color-green" href="#">click here</a> to reset
							</p>
							<p>
								First time here? <a class="color-green" href="signup.php">Create a username</a>
							</p>
						</form>
					</div>
				</div><!--/row-->
			</div><!--/container-->
			<!--=== End Content Part ===-->

			<?php include_once 'blocks/block_footer.php'; ?>
		</div><!--/wrapper-->

		<?php include_once 'blocks/js.php'; ?>

	</body>

	<!-- Cloned by RabinsXP.com-->
</html>
