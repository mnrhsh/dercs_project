<?php
session_start();
require_once '../../Business Services Layer/ManagePickupDeliveryController/pickup_delivery_controller.php';

$courier_id = $_SESSION['courier_id'];

$viewAcceptedRequest =  new pickupDeliveryController();
$data = $viewAcceptedRequest->viewAcceptedRequest($courier_id);
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
										<!-- <h1>Accepted Request</h1> -->
									</header>									
									<!-- service form -->
									<form id="ServiceForm" method= "post" action="">
										<h2>Accepted Request</h2>

										<!-- Accepted Request Form Here -->
										<div class="table-wrapper">
											<table class="alt">
											<tbody>
											<td style="text-align: left; width: 300px;">
										    <table class="center">
											 <tr>
											<th><label>Customer Name</label></th>
											<th><label>Request</label></th>
											<th><label>Date</label></th>
											<th><label>Address</label></th>
											</tr>									
											<?php
												foreach ($data as $row) {
											?>
											<tr>
											<td><label><?=$row['customer_name']?></label></td>
											<td><label><?=$row['delivery_type']?></label></td>
											<td><label><?=$row['delivery_date']?></label></td>
											<td><label><?=$row['delivery_address']?></label></td>
											<td>
												<div class="col-12">
												<ul class="actions">
												<?php
													if($row['delivery_status'] == 'Pick Up')  {
												?>
													<li><input type="button" class="primary" onclick="location.href='../../Application Layer/ManagePickupDelivery/update_status.php?delivery_id=<?=$row['delivery_id']?>'"  value="VIEW">&nbsp</li>
												<?php } 
													else {
												?>
													<li><input type="button" class="primary" onclick="location.href='../../Application Layer/ManagePickupDelivery/update_status.php?delivery_id=<?=$row['delivery_id']?>'"  value="COMPLETED">&nbsp</li>
												<?php } ?>
												</ul>
												</div>
											</td>
											</tr>
											<?php
												}
											?>										
											</table>
										</td>
									</tbody>
								</table>
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