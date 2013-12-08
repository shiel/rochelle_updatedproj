<?php
include 'config.php';
	$getForm = new MessageDAO();
	$getForm->getForms();

$name=$_POST['name'];
$form = getForms();
		foreach ($form as $list) {
			echo $list['id'];
			echo $list['message'];
		}
?>
<br>
<a href='insertionpage.php'><button>Back</button>
