<?php
session_start();
require_once '../../Business Services Layer/ManagePickupDeliveryController/pickup_delivery_controller.php';

//User session
$customer_id = $_SESSION['customer_id'];

$addPickup = new pickupDeliveryController();

// Code for <<PICKUP ONLY>> button
if(isset($_POST['PICKUP']))
	{
		$addPickup->addPickup($customer_id);
	}

// Code for <<PICKUP AND DELIVERY>> button
else if (isset($_POST['DELIVERY']))
	{
	    $addPickup->addPickup2($customer_id);
	}

// Code for <<SUBMIT>> button
else if (isset($_POST['SKIP']))
	{
		$removeData = new pickupDeliveryController();
	    $removeData->removeData($customer_id);
	}
?>

<!DOCTYPE HTML>
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
										<h1>Pickup and Delivery Request</h1>
									</header>
									
									<!-- PickupForm form -->
									<form id="PickupForm" method= "POST" action="">
										<h2>Pickup Option</h2>

										<div class="table-wrapper">
											<table>
											<tbody>
											 <tr>
											<td><label>Date</label></td>
											<td><input type="date" id="delivery_date" name="delivery_date"></td>
											</tr>
											<tr>
											<td><label>Time</label></td>
											<td>
											<select name="delivery_time" id="delivery_time">
												<option value="09.00 am">09.00 am</option>
												<option value="10.00 am">10.00 am</option>
												<option value="11.00 am">11.00 am</option>
												<option value="12.00 pm">12.00 pm</option>
												<option value="01.00 pm">01.00 pm</option>
												<option value="02.00 pm">02.00 pm</option>
												<option value="03.00 pm">03.00 pm</option>
												<option value="04.00 pm">04.00 pm</option>
												<option value="05.00 pm">05.00 pm</option>
												<option value="06.00 pm">06.00 pm</option>
											</select>
											</tr>
											<tr>
											<td><label>Pickup Address</label></td>
											<td><textarea type="text" id="delivery_address" name="delivery_address"></textarea></td>
											</tr>
											<tr>
											<td><label>Pickup Note</label></td>
											<td><textarea type="text" id="delivery_note" name="delivery_note"></textarea></td>
											</tr>
											</tr>
											</tbody>
											</table>
										</div>	
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="SKIP" value="SKIP" class="primary" />
													<li><input type="submit" name="PICKUP" value="PICKUP ONLY" class="primary" />
													<li><input type="button" value="DELIVERY ONLY" class="primary" onclick="location.href='../../Application Layer/ManagePickupDelivery/delivery_option.php'">
													<li><input type="submit" name="DELIVERY" value="PICKUP AND DELIVERY" class="primary" /></li>
									</form>
									</ul>
									</div>
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
										<li><a href="../ManageAccountView/customer_edit_profile.php">PROFILE</a></li>
										<li><a href="service_request_form.php">REQUEST FOR SERVICE</a></li>
										<li><a href="">NOTIFICATION</a></li>
										<li><a href="../ManageAccountView/logout.php">LOGOUT</a></li>
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
		<script src="../../assets/js/jquery.min.js"></script>
		<script src="../../assets/js/browser.min.js"></script>
		<script src="../../assets/js/breakpoints.min.js"></script>
		<script src="../../assets/js/util.js"></script>
		<script src="../../assets/js/main.js"></script>
	</body>
</html>