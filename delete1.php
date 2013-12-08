<?php
include 'config.php';
$id = $_GET['id'];
$getval = MessageDAO::getMessage($id);
foreach($getval as $row):
?>
<html>
<center>
	<form method = 'post' action = 'deleted1.php'>
		<h2>Do you really want to delete this  message ?</h2>
		<input type = 'hidden' name = 'name' value = "<?=$row['name']?>">
		<input type = 'hidden' name = 'email' value = "<?=$row['email']?>">
		<table>
			<td><input type = 'submit' value = 'Yes' name = 'yes'></td>
	</form>
	<form method = 'post' action = 'inboxpage.php'>
			<td><input type = 'submit' value = 'No' name = 'no'></td>
</center>
</html>
<?php endforeach;?>
