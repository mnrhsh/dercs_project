<?php
require_once '../../Business Services Layer/RepairStatusController/RepairStatusController.php';
error_reporting (E_ALL ^ E_NOTICE); 
session_start();
$customer_id = $_SESSION['customer_id'];
$repair_id = $_GET['repair_id'];

$request = new RepairStatusController();

$data = $request->viewStatusDetails($repair_id);


?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DERCS | STATUS DETAILS</title>
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
<?php
            								        foreach($data as $row){
            								    ?>
							<!-- Content -->
								<section>
									<header class="major">
										<h2>Status Details</h2>
									</header>

									<!-- Content -->
										<div class="row">
											<div class="col-8 col-12-small">
                                                
                                                <table class="alt"><tr>
                											<td>Repair ID</td>
                											<td><?=$row['repair_id']?></td>
            											</tr>
            											<tr>
                											<td>Job Performed</td>
                											<td><?=$row['job_performed']?></td>
            											</tr>
            											<tr>
                											<td>Repair Cost</td>
                											<td>RM <?=$row['repair_cost']?></td>
            											</tr>
            											<tr>
                											<td>Repair Status</td>
                											<td><?=$row['repair_status']?></td>
            											</tr>
            											<tr>
                											<td>Repair Details</td>
                											<td><?=$row['repair_details']?></td>
            											</tr>
                                                </table>
                                                      
												
                                            </div>
										</div>

								</section>
<?php } ?>  
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
										<li><a href="../ManageAccountView/customer_edit_profile.php">Profile</a></li>
										<li><a href="../ManageServices/service_request_form.php">Request for Service</a></li>
										<li><a href="../ManageRepairStatusView/customer_view_all_status.php">Repair Status</a></li>
										<li><a href="../ManageAccountView/logout.php">Logout</a></li>
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
									<p class="copyright">&copy;All rights reserved. DERCS Computer Repair Shop Management System.</p>
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