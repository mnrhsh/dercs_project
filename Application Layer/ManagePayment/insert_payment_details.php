<?php
session_start();
require_once '../../Business Services Layer/ManagePaymentController/PaymentController.php';

//User session
$payment_id = $_SESSION['payment_id'];

$makePayment = new PaymentController();

// Code for <<SUBMIT>> button
if(isset($_POST['SUBMIT']))
	{
		$makePayment->makePayment($payment_id);
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
										<h1>Payment</h1>
									</header>
									
									<!-- DeliveryForm form -->
									<form id="PaymentForm" method= "POST" action="">
										<h2>Payment Details</h2>
										<!-- Payment Form Code -->
										<div class="table-wrapper">
											<table>
											<tbody>
											 <tr>
											<td><label>Payment Method</label></td>
											<td>Online Payment <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> Cash On Delivery <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
												<div id="ifYes" style="visibility:hidden">
												Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
													<td><label>Bank type</label></td>
													<td>
													<select name="bank_type" id="bank_type">
													<option value="Bank Islam">Bank Islam</option>
													<option value="Maybank Berhad">Maybank Berhad</option>
													<option value="Public Bank">Public Bank</option>
													</select>
													</tr>
													<tr>
													<td><label>Total Price</label></td>
													<td><textarea type="number" id="total_price" name="total_price"></textarea></td>
													</tr>
													<td><label>Payment Description</label></td>
													<td><textarea type="text" id="payment_desc" name="payment_desc"></textarea></td>
													</tr>
												</div></td>
											</tr>
											</tbody>
											</table>
										</div>	
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="CONTINUE" value="CONTINUE" class="primary" /></li>
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
										<li><a href="../ManagePayment/insert_payment_details.php">PAYMENT</a></li>
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
