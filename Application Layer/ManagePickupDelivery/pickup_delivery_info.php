<?php
session_start();
require_once '../../Business Services Layer/ManagePickupDeliveryController/pickup_delivery_controller.php';

//User session
$courier_id = $_SESSION['courier_id'];

//Obtain delivery id that has been sent from the previous page (pickup_delivery_request.php)
$delivery_id = $_GET['delivery_id'];

$viewRequestInfo =  new pickupDeliveryController();
//Request view request info based on delivery_id that has been sent and retrieve it
$data = $viewRequestInfo->viewRequestInfo($delivery_id);

//Code for <<ACCEPT>> button
//Assign the courier to the request
//Update courier_id = 0 to courier_id = courier_id 
if(isset($_POST['ACCEPT'])){
	$acceptRequest =  new pickupDeliveryController();
	$acceptRequest->acceptRequest($courier_id);
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
										<!-- <h1>Pickup and Delivery Information</h1> -->
									</header>									
									<form id="InfoForm" method= "post" action="">
										<?php
											foreach ($data as $row) {
										// Display title based on the delivery_type
										if( $row['delivery_type'] != 'Pickup' )  {
										?>
										<h2>Delivery Request Information</h2>
										<?php } 
										else {
										?>
										<h2>Pickup Request Information</h2>
										<?php } ?>
										<!-- Pickup Form Code -->
										<div class="table-wrapper">
											<table class="alt">
											<body>
											<td style="text-align: left; width: 300px;">
										    <table class="center">
											
											<tr>
											<?php
											if( $row['delivery_type'] != 'Pickup' )  {
											// Display title based on the delivery_type
											?>
											<td><label>Date for Delivery</label></td>
											<?php } 
											else {
											?>
											<td><label>Date for Pickup</label></td>
											<?php } ?>
											<td><label><?=$row['delivery_date']?></label></td>
											</tr>
											<tr>
											<td><label>Customer Name</label></td>
											<td><label><?=$row['customer_name']?></label></td>
											</tr>
											<tr>
											<td><label>Customer  Phone Number</label></td>
											<td><label><?=$row['customer_phone']?></label></td>
											</tr>
											<tr>
											<td><label>Requested Pickup / Delivery Time </label></td>
											<td><label><?=$row['delivery_time']?></label></td>
											</tr>
											<tr>
											<td><label>Pickup Address</label></td>
											<td><label><?=$row['delivery_address']?></label></td>
											</tr>
											<tr>
											<td><label>Pickup Note</label></td>
											<td><label><?=$row['delivery_note']?></label></td>
											</tr>
											<?php
												}
											?>	
											</table>
										</td>
									</tbody>
								</table>
							</div>
						<div class="col-12">
						<ul class="actions">							
						<li><input type="button" value="BACK" class="primary" onclick="location.href='../../Application Layer/ManagePickupDelivery/pickup_delivery_request.php'">
							<li><input type="submit" name="ACCEPT" value="ACCEPT" class="primary" /></li>
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
										<li><a href="../../Application Layer/ManageAccountView/courier_edit_profile.php">Profile</a></li>
										<li><a href="../../Application Layer/ManagePickupDelivery/pickup_delivery_request.php">Pickup Delivery Request</a></li>
										<li><a href="../../Application Layer/ManagePickupDelivery/view_accepted_request.php">Accepted Request</a></li>
										<li><a href="../../Application Layer/ManageAccountView/logout.php">Logout</a></li>
									</ul>
								</nav>
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