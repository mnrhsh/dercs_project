<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageServicesController/ServicesController.php';

$device_id = $_GET['device_id'];

$device = new ManageServicesController();
$data = $device->viewDevice($device_id); 


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
										<h2>Service Request Details</h2>
									</header>

									<!-- service form -->

										<div class="table-wrapper">
											<table>
												<tbody>
													  <?php
            											foreach($data as $row){
            										  ?>
            										  	<tr>
                											<td>Device Type</td>
                											<td><?=$row['device_type']?></td>
            											</tr>
            											<tr>
                											<td>Device Model</td>
                											<td><?=$row['device_model']?></td>
            											</tr>
            											<tr>
                											<td>Serial Number</td>
                											<td><?=$row['serialNo']?></td>
            											</tr>
            											<tr>
                											<td>Operating System</td>
                											<td><?=$row['device_os']?></td>
            											</tr>
            											<tr>
                											<td>Damage Type</td>
                											<td><?=$row['damage_type']?></td>
            											</tr>
            											<tr>
                											<td>Damage Description</td>
                											<td><?=$row['damage_desc']?></td>
            											</tr>
               										 
               						
                								
               									</tbody>
               									<?php } ?>
            								</table>
            								<form action="" method="POST">
                    							<input type="button" onclick="location.href='view_incoming_requests.php'" value="BACK">
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
										<li><a href="index.html">INCOMING REQUESTS</a></li>
										<li><a href="generic.html">APPROVED REQUESTS</a></li>
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