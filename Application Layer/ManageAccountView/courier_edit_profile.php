<?php
/*
 Filename: courier_edit_profile.php
 Purpose: For courier to view profile
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountController/login_controller.php';
session_start();

$courier_id = $_SESSION ['courier_id'];

$user = new LoginController();
$data = $user->viewCourier($courier_id);

if(isset($_POST['update'])){
    $user->editCourier();
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Courier Profile</title>
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
										<h2>Courier Profile</h2>
									</header>

									<!-- Form -->
											<div class="col-6 col-12-medium">
													<form method="POST" enctype='multipart/form-data' onkeydown="return event.key != 'Enter';">
														<?php
					            							foreach($data as $row){
					                					?>
														<div class="row gtr-uniform">
															
															<div class="col-2">
																<p>Id</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="text" name="courier_id" value="<?=$row['courier_id']?>" readonly>
															</div>

															<div class="col-2">
																<p>Username</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="text" name="courier_username" value="<?=$row['courier_username']?>">
															</div>
															
															<div class="col-2">
																<p>Password</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="password" name="courier_password" value="<?=$row['courier_password']?>">
															</div>

															<div class="col-2">
																<p>Name</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="text" name="courier_name" value="<?=$row['courier_name']?>">
															</div>

															<div class="col-2">
																<p>Phone Number</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="text" name="courier_phone" value="<?=$row['courier_phone']?>">
															</div>

															<div class="col-2">
																<p>Address</p>
															</div>
															<div class="col-10 col-12-xsmall">
																<input class="input" type="text" name="courier_address" value="<?=$row['courier_address']?>">
															</div>
															<!-- Break -->
															<br><br><br><br>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" class="button primary" name="update" id="update" value="Edit" /></li>
																	
																	<?php } ?> 
																</ul>
															</div>
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
										<li><a href="courier_edit_profile.php">Profile</a></li>
										<li><a href="#">Pickup Delivery Request</a></li>
										<li><a href="#">Accepted Request</a></li>
										<li><a href="logout.php">Logout</a></li>
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