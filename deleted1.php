<?php
include 'config.php';
$_name = $_POST['name'];
$_email = $_POST['email'];
$delete = MessageDAO::deleteMessage($_name,$_email);

	echo "<center><h2>";
	echo "<script>alert('Deleted Successfully.');window.location.href='inboxpage.php';</script>";
?>
