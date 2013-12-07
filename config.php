<?php


include 'MessageDAO.php';
include 'Message.php';

	$host='localhost';
	$username='root';
	$db='message_db';

	mysql_connect($host,$username) && mysql_select_db($db);


?>
