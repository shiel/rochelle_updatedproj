<?php 
include 'config.php';
$id = $_GET['id'];
$rows =MessageDAO::getMessage($id);
foreach($rows as $row):

if($row['is_approved'] == 'N'){
	

$rows=MessageDAO::approveMessage($row['id']);

	echo "<script>alert('Message Approved.');window.location.href='inboxpage.php';</script>";
}
endforeach;
?>
