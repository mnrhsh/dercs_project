<?php
require_once '../../Business Services Layer/RepairStatusController/RepairStatusController.php';

$device_id = $_GET['repair_device_id'];

$request = new RepairStatusController();

$data = $request->viewRequestStatus($device_id);

if(isset($_POST['submit'])){

    $request->editRequestStatus($device_id);

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
		<title>DERCS | UPDATE STATUS</title>
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
									<a href="index.html" class="logo"><strong>DERCS</strong> Computer Repair Shop</a>
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
								    <h2>Update Repair Status</h2>
									<!-- Content -->
                                    <form action="" method="post" enctype="multipart/form-data">
                                        
                                            <?php
            								        foreach($data as $row){
            								    ?>
            										  	
                                            <div class="table-wrapper">
												<table><tbody>
            											<tr>
                                                            
                											<td>Job Performed</td>
                											<td><input type="text" class="demo-name" name="job_performed" value="<?php echo $row['job_performed'];?>"></td>
            											</tr>
            											<tr>
                											<td>Repair Cost</td>
                											<td><input type="text" class="demo-name" name="repair_cost" value="<?php echo $row['repair_cost'];?>"></td>
            											</tr>
            											<tr>
                											<td>Repair Status</td>
                                                           <td> <select name="repair_status" class="demo-name">
                                                                <option value="Repairing" <?=$row['repair_status'] == 'Repairing' ? ' selected="selected"' : '';?>>Repairing</option>
                                                              <option value="Finished" <?=$row['repair_status'] == 'Finished' ? ' selected="selected"' : '';?>>Finished</option>
                                                                <option value="Cannot" <?=$row['repair_status'] == 'Cannot' ? ' selected="selected"' : '';?>>Cannot be repaired</option>
                                                                </select>
                                                            </td>
            											</tr>
            											<tr>
                											<td>Repair Details</td>
                											<td><input type="text" class="demo-name" name="repair_details" value="<?php echo $row['repair_details'];?>"></td>
            											</tr></tbody>
                                            </table>
											<?php } ?>
                                            </div>
											<div class="col-12">
                                                <input type="submit" name="submit" class="button primary" value="SAVE"  onclick="return confirm('Are you sure you want to change the repair status?')">
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
										<li><a href="../ManageRepairStatusView/staff_view_repairing_request.php">REPAIRING REQUESTS</a></li>
                                        <li><a href="../ManageRepairStatusView/staff_view_completed_request.php">COMPLETED REQUESTS</a></li>
										<li><a href="../ManageAccountView/user_accounts.php">User Accounts</a></li>
										
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