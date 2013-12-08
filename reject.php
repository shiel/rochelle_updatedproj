<?php 
include 'config.php';
$id = $_GET['id'];
$getAll = new MessageDAO();
$rows = $getAll->getMessage($id);
foreach($rows as $row):


if($row['is_approved'] == 'Y'){
	

$getAll->rejectMessage($row['id']);

	echo "<script>alert('Message Rejected.');window.location.href='inboxpage.php';</script>";
}
endforeach;
?>
