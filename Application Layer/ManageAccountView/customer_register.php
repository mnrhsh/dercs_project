<?php
/*
 Filename: customer_register.php
 Purpose: Registration form for customer
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountController/controller.php';

 $cust = new customerController();

 if(isset($_POST['add'])){
 	$cust->addCustomer();
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Customer Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>DERCS</strong> Computer Repair Shop Management System </a>
									<!-- <ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul> -->
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Customer Register</h2>
									</header>

									<!-- Form -->
											<div class="col-6 col-12-medium">
												
												<div class="box">
													<form method="post" enctype='multipart/form-data' onsubmit = "return(validate());">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input class="input" type="text" id="customer_username" name="customer_username" placeholder="Username" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input class="input" type="password" id="customer_password" name="customer_password" placeholder="Password" />
															</div>
															
															<!-- Break -->
															<div class="col-12">
																<input class="input" type="text" id="customer_name" name="customer_name" id="name" placeholder="Name">
															</div>
															<div class="col-12">
																<input class="input" type="text" id="customer_phone" name="customer_phone" id="tel" placeholder="Phone Number">
															</div>
															<div class="col-12">
																<input class="input" type="text" id="customer_address" name="customer_address" placeholder="Address">
															</div>
															<!-- Break -->
															<br><br><br>
															<div class="col-12">
																<ul class="actions">
																	<li><input class="primary" type="submit"  name="add" value="Register your account" /></li>
																	<li><input type="reset" value="Reset" /></li>
																</ul>
															</div>
															<p>Have already an account? <a href="login.php">Log in here</a></p>
														</div>
													</form>
												</div>
									
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="login.php">Login</a></li>
										<li>
											<span class="opener">Register</span>
											<ul>
												<li><a href="customer_register.php">Customer</a></li>
												<li><a href="courier_register.php">Courier</a></li>
											</ul>
										</li>
									</ul>
								</nav>
								

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy;All rights reserved. DERCS Computer Repair Shop Management System</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>