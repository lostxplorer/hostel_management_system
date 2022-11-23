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
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="assets/css/paper-dashboard.css">
	<link rel="stylesheet" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validation.min.js"></script>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>-->
</head>
<?php if(True)
{ ?><div class="brand clearfix">
		<a href="index.php" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<br>
		<div >
		<div class="row">
			<form action="search.php" method="post">
			<div class="col-md-2">

			</div>
			<div class="col-md-3">
				<input type="text" name="key" id="key" class = "form-control" required>
			</div>
			<div class="col-md-1" style = "margin-left: -34px; margin-top: -10px;">
			<button class="btn btn-primary"><i class="fa fa-search" style = "padding: 4.5px;"></i></button>
			</div>
			<div class="col-md-2">

			</div>
			<div class="col-md-2">
			<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Admin <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="../index.php">Logout</a></li>
				</ul>
			</li>
		</ul>
			</div>
		</div>
			</form>
		</div>-->
		<br>
		
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="navbar-brand" style="font-size:20px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>
	<div class="ts-main-content">
	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(True)
				{ ?>
					<li><a href="index.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="add_rec.php"><i class="fa fa-user-plus"></i>Add Residence</a></li>
<li><a href="add_room.php"><i class="fa fa-key"></i>Add Room</a></li>
<li><a href="list_room.php"><i class="fa fa-anchor"></i>Book Room</a></li>
<li><a href="list_res.php"><i class="fa fa-users"></i>Residence List</a></li>
<li><a href="log_history.php"><i class="fa fa-barcode"></i>Access log</a></li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>
	</div>
	<div style="margin-top: 101px;">
</div>
<div style=" margin-left: 256px;">
		