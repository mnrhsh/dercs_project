<?php
/*
 Filename: user_accounts.php
 Purpose: List of user accounts for Staff to view and ban
*/
require_once $_SERVER["DOCUMENT_ROOT"].'/dercs_project/Business Services Layer/ManageAccountController/controller.php';

 $cust = new customerController();

 $data = $cust->viewAll();

if(isset($_POST['delete'])){
    $cust->delete();
}


?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>User Accounts</title>
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
										<h2>User Accounts</h2>
									</header>

									<!-- Form -->
											<div class="col-6 col-12-medium">
													<form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-12">
															
															<div class="table-wrapper">
														<table >
															<thead>
																<tr>
																	<th>No</th>
																	<!-- <th>Id</th> -->
																	<th>Username</th>
																	<th>Phone</th>
																	<th>Address</th>
																	<th width="30%">Action</th>
																</tr>
															</thead>
															<tbody>

									<?php
            							$i = 1;
            								foreach($data as $row){
               										echo "<tr>"
                									. "<td>".$i.".</td>"
                       								// . "<td>".$row['customer_id']."</td>"
                       								. "<td>".$row['customer_username']."</td>"
                       								. "<td>".$row['customer_phone']."</td>"
                       								. "<td>".$row['customer_address']."</td>"
                       								?>
                       								<?php
               						?>
               						<td><form action="" method="POST">
               						<input type="button" class="button"  onclick="location.href='edit_user_account.php?customer_id=<?=$row['customer_id']?>'" value="EDIT">&nbsp;
                    				<!-- <input type="button" class="primary-btn order-submit" onclick="location.href='view_menu.php?food_ID=<?=$row['food_ID']?>'" value="VIEW">&nbsp; -->
               						
                    				
                    				<input type="hidden" name="customer_id" value="<?=$row['customer_id']?>">
                    				<input type="submit" class="button primary" name="delete" value="BAN" onclick="return confirm('Are you sure you want to ban?')">
                					</form></td>
               		                <?php
              								$i++;
             								echo "</tr>";
            								}
            						?>
																
															</tbody>
														</table>
													</div>
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
										<li><a href="../ManageServices/view_incoming_requests.php">INCOMING REQUESTS</a></li>
										<li><a href="../ManageServices/view_approved_request.php">APPROVED REQUESTS</a></li>
										<li><a href="#">Cancellation Requests</a></li>
										<li><a href="user_accounts.php">User Accounts</a></li>
										
										<li><a href="logout.php">Logout</a></li>
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