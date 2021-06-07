<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ServicesController.php';

//$customer_id = $_SESSION['customer_id'];
//test
$customer_id = '1';

$device = new ManageServicesController();

if(isset($_POST['submit'])){
    $device->add($customer_id);
}

?>



<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DERCS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Dercs</strong> Computer Repair Shop</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Request Service</h1>
									</header>


									
									<!-- service form -->
									<form id="ServiceForm" method= "post" action="">
										<h2>Device Information</h2>

										<div class="table-wrapper">
											<table>
												<tbody>
													<tr>
														<td>Type</td>
														<td>
														<input type="radio" id="desktop" value="Desktop Computer" name="device_type">
														<label for="desktop">Desktop Computer</label>

													
														<input type="radio" id="laptop" value="Laptop" name="device_type">
														<label for="laptop">Laptop</label>
														</td>
													<tr>
														<td>Model</td>
														<td><input type="text" name="device_model" id="model" placeholder="Model" /></td>
													</tr>

													<tr>
														<td>Serial Number</td>
														<td><input type="text" name="serialNo" id="serialNo"  placeholder="Serial Number" /></td>
													</tr>

													<tr>
														<td>Operating System</td>
														<td>
														<input type="radio" id="windows" value="Windows" name="device_os">
														<label for="windows">Windows</label>

														<input type="radio" id="mac" value="Mac OS" name="device_os">
														<label for="mac">Mac OS</label>

														</td>
													</tr>
												</tbody>
											</table>
										</div>
										
									<br>
										<h2>Damage Information</h2>
										<div class="table-wrapper">
											<table>
												<tbody>
													<tr>
														<td>Damage Type</td>
														<td>
														<select name="damage_type" id="damage_type">
															<option value="">Select One</option>
															<option value="Virus Removal">Virus Removal</option>
															<option value="Hardware Repairs">Hardware Repairs</option>
															<option value="Data Recovery & Backup">Data Recovery & Backup</option>
														</select>
														</td>
													</tr>
													<tr>
														<td>Damage Description</td>
														<td><textarea name="damage_desc" id="damage_desc" placeholder="Enter your damage details" rows="6"></textarea>
														<p>Please provide detailed information about your device problems so we can help you out.</p></td>
													</tbody>
												</table>
											</div>
						

											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="submit" value="CONTINUE" class="primary" /></li>
													<li><input type="reset" value="RESET" /></li>
												</ul>
											</div>
									</form>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="">Homepage</a></li>
										<li><a href="">INBOX</a></li>
										<li><a href="service_request_form.php">REQUEST FOR SERVICE</a></li>
								
								</nav>

							<!-- Section -->
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
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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