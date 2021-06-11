<?php
/*
 Filename: login.php
 Purpose: For login purposes for customer, courier and staff
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountController/login_controller.php';
session_start();
if (isset($_POST['submit'])) {
	// create controller
	$user = new LoginController();
	// call method dd

	$user -> loginRole();
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
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
										<h2>Login</h2>
									</header>

									<!-- Form -->

												<div class="box">

													<form method="post">
														<div class="row gtr-uniform">
															<!-- Break -->
															<div class="col-12">
																<select class="input-select" id="role" name="role">
																	<option value="">- Login As -</option>
																	<option value="customer">Customer</option>
																	<option value="courier">Courier</option>
																	<option value="staff">Staff</option>
																</select>
															</div>
															<!-- Break -->
															<div class="col-12">
																<input class="input" type="text" name="uname" id="uname" placeholder="Username">
															</div>
															<div class="col-12">
																<input class="input" type="password" name="pwd" id="pwd"  placeholder="Password">
															</div>
															<!-- Break -->
															<br><br><br>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Login" class="primary" /></li>
																</ul>
															</div>
															<p>Don't have an account? 
																<br><a href="customer_register.php">Register here for new customer</a> OR
																<a href="courier_register.php">Register here for new courier</a>
															</p>
														</div>
													</form>
												</div>
									
								</section>

						</div>
					</div>

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

								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Troubleshooting your computer can be a dreadful task, but here at DERCS our technicians will solve your desktop problems quickly and efficiently, to ensure that your computer is running at peak performance.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">dercs.ent@gmail.com</a></li>
										<li class="icon solid fa-phone">06-2615933</li>
										<li class="icon solid fa-home">Jalan Mahkota, Kuantan<br />
										Kuantan, Pahang</li>
									</ul>
								</section>
								

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