<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageServicesController/ServicesController.php';

$device = new ManageServicesController();
$data = $device->viewAllAccepted();

if(isset($_POST['delete'])){
    $device->delete();
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
									<h2>Approved Requests</h2>
									</header>

									<!-- service form -->
										<div class="table-wrapper">
											<table>
												<thead>
													<th>Type</th>
													<th>Model</th>
													<th>Damage</th>
													<th>Action</th>
												</thead>
												<tbody>
													  <?php
            										  $i = 1;
            										  foreach($data as $row){
               										  echo "<tr>"
                       								. "<td>".$row['device_type']."</td>"
                       								. "<td>".$row['device_model']."</td>"
                       								. "<td>".$row['damage_type']."</td>";
               											?>
               										<td><form action="" method="POST">
                    								<input type="button" onclick="location.href='viewt_details.php?device_id=<?=$row['device_id']?>'" value="VIEW">&nbsp
                </form>
                										</form></td>
               									</tbody>
               									<?php
               									$i++;
               									echo "</tr>";
               									}
            									?>
            								</table>

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
										<li><a href="view_incoming_requests.php">INCOMING REQUESTS</a></li>
										<li><a href="view_approved_request.php">APPROVED REQUESTS</a></li>
										<li><a href="#">Cancellation Requests</a></li>
										<li><a href="../ManageAccountView/user_accounts.php">User Accounts</a></li>
										
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</nav>

							<!-- Section -->

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