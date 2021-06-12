<?php
error_reporting (E_ALL ^ E_NOTICE); 
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageServicesController/ServicesController.php';
//Test
$customer_id = $_SESSION['customer_id'];
//$device_id = $_POST['device_id'];

//$customer_id = '1';

$device = new ManageServicesController();
$data = $device->viewDetails($customer_id); 

if(isset($_POST['accept'])){
	$device->accept($customer_id);
}
else if(isset($_POST['reject'])){
	$device = new ManageServicesController();
    $device->delete($customer_id);
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
										<h1>Confirm your request</h1>
									</header>

					
									<!-- service form -->
									<form id="ServiceForm" method= "post" action="">
										<h2>Service Quotation</h2>

										<div class="table-wrapper">
											<table>
												<?php
            											foreach($data as $row){
            												$damage = $row['damage_desc'];
            									?>
            									<p>Quotation Date : <?=$row['request_date']?> </p>

												<thead>
													<tr>
														<th>Type</th>
														<th>Description</th>
														<th>Estimation Price</th>
													</tr>
												</thead>

												<tbody>
												
            									<!--	
													<tr>
														<td>Type</td>
														<td><?=$row['device_type']?>
														</td>
													<tr>
														<td>Model</td>
														<td><?=$row['device_model']?></td>
													</tr>

													<tr>
														<td>Operating System</td>
														<td><?=$row['device_os']?></td>
													</tr>-->

													<tr>
														<td>Damage Type</td>
														<td><?=$row['damage_type']?></td>
														<td></td>
													</tr>
													<tr>
														<td>Damage Description</td>
														<td><?=$row['damage_desc']?></td>
														<td></td>

													</tr>
													<tr>
														<td></td>
														<td></td>
														<td>RM <?=$row['estimate_price']?></td>
													</tr>
												</tbody>
												<?php } ?>
											</table>
										</div>
										<div class="col-12">
										<ul class="actions">
											<li><input type="submit" name="accept" value="ACCEPT" class="primary" /></li>
											<li><input type="submit" name="reject" value="REJECT" class="primary" /></li>
										</ul>
										</div>

									</form>

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
										<li><a href="../ManageAccountView/customer_edit_profile.php">PROFILE</a></li>
										<li><a href="service_request_form.php">REQUEST FOR SERVICE</a></li>
										<li><a href="../ManageRepairStatusView/customer_view_all_status.php">REPAIR STATUS</a></li>
										<li><a href="../ManageAccountView/logout.php">LOGOUT</a></li>
								
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