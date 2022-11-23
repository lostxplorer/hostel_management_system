<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Hostel Registration</title>
	<link rel="stylesheet" href="assets/css/prof.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/profile.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validation.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<?php if(True)
{ ?><div class="brand clearfix">
		<a href="index.php" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="index.php"><i></i> <span id="acc"></span> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="../index.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>
	<div class="ts-main-content">
	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label"></li>
				<?PHP if(True)
				{ ?>
					<li><a href="index.php"><i class="fa fa-files-o"></i>Dashboard</a></li>
				<li><a href="log.php"><i class="fa fa-users"></i> Log entry</a></li>
				<li><a href="log_history.php"><i class="fa fa-user"></i> Log history</a></li>
<?php } else { ?>
				
				<li><a href="index.php"><i class="fa fa-files-o"></i>Dashboard.php</a></li>
				<li><a href="log.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="log_history.php"><i class="fa fa-user"></i> Log history</a></li>
				<?php } ?>

			</ul>
		</nav>
	</div>
	<div style="margin-top: 62.850px;">
</div>
<div style=" margin-left: 256px;">
		