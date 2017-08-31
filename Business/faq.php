<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<!-- Cloned by RabinsXP.com-->
	<head>
		<title>FAQ | TOTUS</title>

		<?php include_once("blocks/meta_tags.php"); ?>
		<?php include_once("blocks/css.php"); 
		
			function solution(&$A){
				$n = sizeof($A);
				$L = array_pad(array(), $n+1, -1);
				for($i = 0; $i < $n; $i++){
					$L[$i + 1] = $A[$i];
				}
				$count = 0;
				$pos = (int)(($n+1)/2);
				$candidate = $L[$pos];
				for($i = 1; $i <= $n; $i++){
					if($L[$i] == $candidate)
						$count = $count +1;
				}
				if($count > $pos)
					return $candidate;
				return (-1);
			}
		
		
		
		?>
		
		<!-- CSS Page Style -->
		<link rel="stylesheet" href="assets/css/pages/page_faq1.css">		
	</head>

	<body>
		<div class="wrapper">
			<?php include_once("blocks/block_header.php"); ?>

			<!--=== Breadcrumbs v2 ===-->
			<div class="breadcrumbs-v2 faq-breadcrumb margin-bottom-20">
				<div class="breadcrumbs-v2-in">
					<h1>Frequently Asked Questions</h1>
					<ul class="breadcrumb-v2 list-inline">
						<li>
							<a href="index-2.html"><i class="rounded-x fa fa-angle-right"></i>Home</a>
						</li>
						<li>
							<a href="#"><i class="rounded-x fa fa-angle-right"></i>Page</a>
						</li>
						<li class="active">
							<i class="rounded-x fa fa-angle-right"></i>F.A.Q
						</li>
					</ul>
				</div>
			</div>
			<!--=== End Breadcrumbs v2 ===-->

			<!--=== FAQ Page ===-->
			<div class="container content faq-page">
				<!-- FAQ Blocks -->
				<div class="row equal-height-columns margin-bottom-40">
					<div class="col-sm-4">
						<div class="easy-block-v3 service-or equal-height-column">
							<div class="service-bg"></div>
							<i class="icon-badge"></i>
							<div class="inner-faq-b">
								<h3>What is Unify Template?</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus justo vel tincidunt consectetur.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="easy-block-v3 service-or equal-height-column">
							<div class="service-bg"></div>
							<i class="icon-directions"></i>
							<div class="inner-faq-b">
								<h3>How to Update Unify?</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus justo vel tincidunt consectetur.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="easy-block-v3 service-or equal-height-column">
							<div class="service-bg"></div>
							<i class="icon-layers"></i>
							<div class="inner-faq-b">
								<h3>The Features of Unify?</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus justo vel tincidunt consectetur.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End FAQ Blocks -->

				<!-- FAQ Content -->
				<div class="row">
					<!-- Begin Tab v1 -->
					<div class="col-md-6">
						<div class="tab-v1">
							<ul class="nav nav-tabs margin-bottom-20">
								<li class="active">
									<a data-toggle="tab" href="#home">Top 7 questions</a>
								</li>
								<li>
									<a data-toggle="tab" href="#profile">Payment assistance</a>
								</li>
								<li>
									<a data-toggle="tab" href="#messages">Work for Unify</a>
								</li>
								<li>
									<a data-toggle="tab" href="#settings">About Unify</a>
								</li>
							</ul>
							<div class="tab-content">
								<!-- Tab Content 1 -->
								<div id="home" class="tab-pane fade in active">
									<div id="accordion-v1" class="panel-group acc-v1">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-One" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> How to Customize Sky-Forms </a></h4>
											</div>
											<div class="panel-collapse collapse in" id="collapse-One">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Two" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> What is "Error 404" page? </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Two">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Three" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> How to apply background with "Opacity" </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Three">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Four" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> How to use Vector Map </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Four">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Five" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> Can I use Unify Template on multiple projects? </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Five">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Six" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> How can I make sure that I always have the latest version of Unify? </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Six">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-Seven" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle"> Is it safe to Update? </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-Seven">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Tab Content 1 -->

								<!-- Tab Content 2 -->
								<div id="profile" class="tab-pane fade">
									<div id="accordion-v2" class="panel-group acc-v1">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v2-One" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle"> Payment assistance first </a></h4>
											</div>
											<div class="panel-collapse collapse in" id="collapse-v2-One">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v2-Two" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle"> Payment assistance second </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v2-Two">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v2-Three" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle"> Payment assistance third </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v2-Three">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v2-Four" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle"> Payment assistanc fourth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v2-Four">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v2-Five" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle"> Payment assistanc fifth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v2-Five">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Tab Content 2 -->

								<!-- Tab Content 3 -->
								<div id="messages" class="tab-pane fade">
									<div id="accordion-v3" class="panel-group acc-v1">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v3-One" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle"> Work for Unify first </a></h4>
											</div>
											<div class="panel-collapse collapse in" id="collapse-v3-One">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v3-Two" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle"> Work for Unify second </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v3-Two">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v3-Three" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle"> Work for Unify third </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v3-Three">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v3-Four" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle"> Work for Unify fourth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v3-Four">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v3-Five" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle"> Work for Unify fifth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v3-Five">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Tab Content 3 -->

								<!-- Tab Content 4 -->
								<div id="settings" class="tab-pane fade">
									<div id="accordion-v4" class="panel-group acc-v1">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v4-One" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle"> About Unify first </a></h4>
											</div>
											<div class="panel-collapse collapse in" id="collapse-v4-One">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v4-Two" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle"> About Unify second </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v4-Two">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v4-Three" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle"> About Unify third </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v4-Three">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v4-Four" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle"> About Unify fourth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v4-Four">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="#collapse-v4-Five" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle"> About Unify fifth </a></h4>
											</div>
											<div class="panel-collapse collapse" id="collapse-v4-Five">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Tab Content 4 -->
							</div>
						</div>
					</div><!--/col-md-6-->
					<!--End Tab v1-->

					<!-- Popular Topics -->
					<div class="col-md-6">
						<div class="headline">
							<h2>Popular Topics</h2>
						</div>
						<div class="row main-check margin-bottom-30">
							<div class="col-xs-6 md-margin-bottom-20">
								<ul class="list-unstyled check-style">
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How does encryption work?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Is Unify Template legal?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Can I download Unify multiple times?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How to Update Unify Template?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How does encryption work?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Is Unify Template legal?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Can I download Unify multiple times?</a>
									</li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled check-style">
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How does encryption work?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Is Unify Template legal?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Can I download Unify multiple times?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How to Update Unify Template?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">How does encryption work?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Is Unify Template legal?</a>
									</li>
									<li>
										<i class="fa fa-angle-right color-green"></i><a href="#">Can I download Unify multiple times?</a>
									</li>
								</ul>
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-md-6">
								<div class="faq-add">
									<div class="top-part">
										<i class="icon-support"></i>
										<h3 class="new-title"><a href="#">Online Support</a></h3>
									</div>
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="faq-add">
									<div class="top-part">
										<i class="icon-lock"></i>
										<h3 class="new-title"><a href="#">Security &amp; Privacy</a></h3>
									</div>
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid
									</p>
								</div>
							</div>
						</div>
					</div><!--/col-md-6-->
					<!-- End Popular Topics -->
				</div>
				<!-- End FAQ Content -->
			</div><!--/container-->
			<!--=== End FAQ Page ===-->

			<!--=== Service Info ===-->
			<div class="service-info">
				<div class="container">
					<div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
						<h2>Features</h2>
						<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="margin-bottom-30">
								<i class="service-info-icon rounded-x icon-wrench"></i>
								<div class="info-description">
									<h3 class="title-v3-md text-uppercase">HTML5 + CSS3</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.
									</p>
								</div>
							</div>
							<div class="margin-bottom-30">
								<i class="service-info-icon rounded-x icon-power"></i>
								<div class="info-description">
									<h3 class="title-v3-md text-uppercase">Launch Ready</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.
									</p>
								</div>
							</div>
							<div class="md-margin-bottom-30">
								<i class="service-info-icon rounded-x icon-bell"></i>
								<div class="info-description">
									<h3 class="title-v3-md text-uppercase">Fully Responsive</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="responsive-video">
								<iframe src="http://player.vimeo.com/video/78451097?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
							</div>
						</div>
					</div><!--/row-->
				</div><!--/container-->
			</div>
			<!--=== End Service Info ===-->

			<!--=== FAQ Content ===-->
			<div class="container content-sm">
				<div class="row equal-height-columns margin-bottom-40">
					<div class="col-sm-4 no-space">
						<div class="easy-block-v3 equal-height-column first">
							<i class="fa fa-headphones"></i>
							<div class="inner-faq-b">
								<h3>Contact Us</h3>
								<h4>1(123) 456</h4>
								<p>
									Sed rutrum risus non massa sodales varius. Etiam aliquet tincidunt sapien, nec iaculis eros.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 no-space">
						<div class="easy-block-v3 equal-height-column second">
							<i class="icon-cursor"></i>
							<div class="inner-faq-b">
								<h3>Email Us</h3>
								<h4>info@anybiz.com</h4>
								<p>
									Sed rutrum risus non massa sodales varius. Etiam aliquet tincidunt sapien, nec iaculis eros.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 no-space">
						<div class="easy-block-v3 equal-height-column third">
							<i class="icon-support"></i>
							<div class="inner-faq-b">
								<h3>Support</h3>
								<h4>Technical Support</h4>
								<p>
									Sed rutrum risus non massa sodales varius. Etiam aliquet tincidunt sapien, nec iaculis eros.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<!-- Google Map -->
						<div id="map" class="map"></div>
						<!-- End Google Map -->
					</div>
					<div class="col-md-6 col-sm-6">
						<!-- Business Hours -->
						<h3>Get In Touch</h3>
						<ul class="list-inline">
							<li>
								<strong>Monday-Friday:</strong> 10am to 8pm
							</li>
							<li>
								<strong>Saturday:</strong> 11am to 3pm
							</li>
							<li>
								<strong>Sunday:</strong> Closed
							</li>
						</ul>

						<hr>

						<div class="row">
							<div class="col-sm-6">
								<div class="input-group margin-bottom-10">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="name" placeholder="Name" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" placeholder="Email" class="form-control">
								</div>
							</div>
						</div>
						<textarea rows="5" class="form-control margin-bottom-20" placeholder="Type your question here..."></textarea>

						<button class="btn-u btn-u-sm pull-right" type="button">
							Send question
						</button>
					</div>
				</div>
			</div><!--/container-->
			<!--=== End FAQ Content ===-->

			<?php include_once 'blocks/block_footer.php'; ?>
		</div><!--/End Wrapepr-->

		<?php include_once 'blocks/js.php'; ?>
		<!-- JS Page Level -->
		<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
		<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
		<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
		<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
		<script type="text/javascript">
			function pageInit() {
				App.initCounter();
				App.initParallaxBg();
				ContactPage.initMap();
			};
		</script>

	</body>

	<!-- Cloned by RabinsXP.com-->
</html>