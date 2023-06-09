<?php 
session_start();
include('inc/header.php');
?>
<title>Dashboard: Demo Push Notification System with PHP & MySQL</title>
<script src="notification.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
	<h2>Dashboard: Push Notification System with PHP & MySQL</h2>	
	<h3>User Account </h3>
	<?php if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin') { ?>
		<a href="manage_notification.php">Manage Notification</a> | 
	<?php } ?>
	<?php if(isset($_SESSION['username']) && $_SESSION['username']) { ?>
		<a href="?url=logout">Logout</a>
	<?php } else { ?>
		<a href="?url=login">Login</a>
	<?php } ?>
	<hr> 
	<?php if (isset($_SESSION['username'])) { ?>
		<h4>Welcome back <strong><?php echo $_SESSION['username']; ?></strong></h4>	
	<?php } ?>		
	
</div>	
<?php include('inc/footer.php');?>