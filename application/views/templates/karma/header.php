<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SAZAN Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/karma/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('categories') ?>">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Official Store</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.html">Discount</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Best Seller</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Checkout</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Award</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="">Best Tenant</a></li>
									<li class="nav-item"><a class="nav-link" href="">Best Member</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Account</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login') ?>">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('registrasi') ?>">Register</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?php echo base_url('dashboard/detail_keranjang') ?>" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->