<center>
<font size='4'>
<b>Sent Items</b>
</font>
</center>
<?php
include 'config.php';

	$getForm = new MessageDAO();
	$sent=$getForm->getForms();
		$del = "delete.php?id=";

		echo "<center>";
		echo "<table border = '1'>";
		echo "<tr><td><b>"."Id"."</td>"
				."<td><b>"."Name"."</td>"
				."<td><b><b>"."Email"."</td>"
				."<td><b>"."Message"."</td>"
				."<td><b>"."Date_Posted"."</td>"
				."<td><b>"."is_approved"."</td>"
				."<td colspan='3'><b><center>Action</center></td></tr>";
		
		foreach ($sent as $list) {
			echo "<tr><td>".$list['id']."</td>"
				."<td>".$list['name']."</td>"
				."<td>".$list['email']."</td>"
				."<td>".$list['message']."</td>"
				."<td>".$list['date_posted']."</td>"
				."<td>Y</td>"
				."<td>"."<form method ='post' action = ".$del.$list['id'].
				"> <input type ='submit' name = 'delete' value = 'Delete'></form></td></tr>";
		}
		echo "</table>";
		echo "<center><a href='insertionpage.php'><button>Create New Message</button>". 
		"<a href='inboxpage.php'><button>Inbox</button></center>";

		
?>
