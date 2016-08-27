<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tour Packer</title>
	<meta name="description" content="HTML Responsive Template for Tour Agency or Company Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="tour package, holiday, hotel, vocation, booking, trip, travel, tourism, tourist" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('/assets/images/images/ico/apple-touch-icon-144-precomposed.png');?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('/assets/images/images/ico/apple-touch-icon-114-precomposed.png');?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('/assets/images/images/ico/apple-touch-icon-72-precomposed.png');?>">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/images/images/ico/apple-touch-icon-57-precomposed.png');?>">
	<link rel="shortcut icon" href="<?php echo base_url('/assets/images/images/ico/favicon.png');?>">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css');?>" media="screen">	
	<link href="<?php echo base_url('/assets/css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/main.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/component.css');?>" rel="stylesheet">
	
	<!-- CSS Font Icons -->
	<!-- CSS Font Icons -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/ionicons/css/ionicons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/font-awesome/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/simple-line-icons/css/simple-line-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/themify-icons/themify-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/icons/rivolicons/style.css');?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- CSS Custom -->
	<link href="<?php echo base_url('/assets/css/style.css');?>" rel="stylesheet">
	
	<link href="<?php echo base_url('/assets/css/color-04.css');?>" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body style="overflow-x:hidden;">

	
	
	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				
				<div class="clear"></div>
				
				<!-- Begin # DIV Form -->
				<div id="modal-login-form-wrapper">
					
					<!-- Begin # Login Form -->
					<form id="login-form" action="<?php echo base_url('auth/login');?>" method="post">
						<div class="modal-body pb-5">
					
							<h4 class="text-center heading mt-10 mb-20">Sign-in</h4>
						
							<button class="btn btn-facebook btn-block">Sign-in with Facebook</button>
							
							<div class="modal-seperator">
								<span>or</span>
					

							</div>
							
							<div class="form-group"> 
								<input id="identity" class="form-control"  name="identity" placeholder="email" type="text"> 
							</div>
							<div class="form-group"> 
								<input id="password" class="form-control" name="password" placeholder="password" type="password"> 
							</div>
			
							<div class="form-group">
								<div class="row gap-5">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="checkbox-block fa-checkbox"> 
											<input id="remember" name="remember" class="checkbox"  type="checkbox"> 
											<label class="" for="remember_me_checkbox">remember</label>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-right"> 
										<button id="login_lost_btn" type="button" class="btn btn-link">forgot pass?</button>
									</div>
								</div>
							</div>
						
						</div>
						
						<div class="modal-footer">
						
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block">Sign-in</button>
								</div>
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							<div class="text-left">
								No account? 
								<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
							
						</div>
					</form>
					<!-- End # Login Form -->
								
					<!-- Begin | Lost Password Form -->
					<form id="lost-form" style="display:none;" action="<?php echo base_url('auth/forgot_password');?>" method="post">
						<div class="modal-body pb-5">
						
							<h3 class="text-center heading mt-10 mb-20">Forgot password</h3>
							<div class="form-group mb-10"> 
								<input id="email" class="form-control" type="text"  name="email" placeholder="Enter Your Email">
							</div>
							
							<div class="text-center">
								<button id="lost_login_btn" type="button" class="btn btn-link">Sign-in</button> or 
								<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
							
						</div>
						
						<div class="modal-footer mt-10">
							
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6">
									<button type="submit" class="btn btn-primary btn-block">Submit</button>
								</div>
								<div class="col-xs-6 col-sm-6">
									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							
						</div>
						
					</form>
					<!-- End | Lost Password Form -->
								
					<!-- Begin | Register Form -->
					<form id="register-form" style="display:none;" action="<?php echo base_url('auth/register');?>" method="post">
					
						<div class="modal-body pb-5">
						
							<h3 class="text-center heading mt-10 mb-20">Register</h3>
							
							<button class="btn btn-facebook btn-block">Register with Facebook</button>
							
							<div class="modal-seperator">
								<span>or</span>
							</div>
							
							<div class="form-group"> 
								<input id="first_name" name="first_name" class="form-control" type="text" placeholder="First Name"> 
							</div>
							<div class="form-group"> 
								<input id="last_name" name="last_name" class="form-control" type="text" placeholder="Last Name"> 
							</div>
							<div class="form-group"> 
								<input id="username" name="username"  class="form-control" type="text" placeholder="Username"> 
							</div>
							
							<div class="form-group"> 
								<input id="email" name="email" class="form-control" type="email" placeholder="Email">
							</div>
							
							<div class="form-group"> 
								<input id="password" name="password" class="form-control" type="password" placeholder="Password">
							</div>
							
							<div class="form-group"> 
								<input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm Password">
							</div>

						</div>
							
						<div class="modal-footer mt-10">
						
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block">Register</button>
								</div>
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							
							<div class="text-left">
									Already have account? <button id="register_login_btn" type="button" class="btn btn-link">Sign-in</button>
							</div>
							
						</div>
							
					</form>
					<!-- End | Register Form -->
								
				</div>
				<!-- End # DIV Form -->
								
			</div>
		</div>
	</div>
	<!-- END # MODAL LOGIN -->
	
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<header id="header">
	  
			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

				<div class="navbar-top">
				
					<div class="container">
						
						<div class="flex-row flex-align-middle">
							<div class="flex-shrink flex-columns">
								<a class="navbar-logo" href="<?php echo base_url('/');?>">
									<img src="<?php echo base_url('/assets/images/images/logo-white.png');?>" alt="Logo" />
								</a>
							</div>
							<div class="flex-columns">
								<div class="pull-right">
								
									<div class="navbar-mini">
										<ul class="clearfix">
										
											<li class="dropdown bt-dropdown-click hidden-xs">
												<a id="language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="ion-social-usd hidden-xss"></i> Dollar
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>
													<li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>
													<li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>
												</ul>
											</li>
											
											<li class="dropdown bt-dropdown-click hidden-xs">
												<a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="ion-android-globe hidden-xss"></i> English
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#">English</a></li>
													<li><a href="#">France</a></li>
													<li><a href="#">Japanese</a></li>
												</ul>
											</li>
											
											<li class="dropdown bt-dropdown-click visible-xs">
												<a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>
													<li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>
													<li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>
													<li class="divider"></li>
													<li><a href="#">English</a></li>
													<li><a href="#">France</a></li>
													<li><a href="#">Japanese</a></li>
												</ul>
											</li>
											<?php if($this->ion_auth->logged_in()){
												echo('<li class="user-action"><a data-toggle="tooltip" data-placement="bottom" title="Go to dashboard" class="btn" href="'.base_url('/main/dashboard').'">'.$user['first_name'].'</a></li>');
											    echo('<li class="user-action"><a href="'.base_url('/auth/logout').'" class="btn">Sign Out</a></li>');}
											else{
											echo ('<li class="user-action">
												<a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a>
											</li>');
											}	?>
										</ul>
									</div>
						
								</div>
							</div>
						</div>

					</div>
					
				</div>
				


				<div id="slicknav-mobile"></div>
				
			</nav>
			<!-- end Navbar (Header) -->

		</header>
		
		<div class="clear"></div>