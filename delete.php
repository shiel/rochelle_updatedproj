
<?php
include 'config.php';
$id = $_GET['id'];
$getval =MessageDAO::getMessage($id);
foreach($getval as $row):
?>
<html>
<center>
	<form method = 'post' action = 'deleted.php'>
		<h2>Do you really want to delete this  message ?</h2>
		<input type = 'hidden' name = 'name' value = "<?php echo $row['name'];?>">
		<input type = 'hidden' name = 'email' value = "<?php echo $row['email'];?>">
		<table>
			<td><input type = 'submit' value = 'Yes' name = 'yes'></td>
	</form>
	<form method = 'post' action = 'sentItems.php'>
			<td><input type = 'submit' value = 'No' name = 'no'></td>
</center>
</html>
<?php endforeach;?>
