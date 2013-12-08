<?php
include 'config.php';

$email=$_POST['email'];
$email_pattern ='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
 preg_match($email_pattern,$email,$matches);

 if(!$matches){
 	echo "<center>The email Must be on a valid email format.<br>";
 	echo "<a href='insertionpage.php'><button>Back</button></center>";
}else{

$arr = array(
		'_name'=>$_POST['name'],
		'_email'=>$_POST['email'],
		'_sms'=>$_POST['sms']
	);
$message = new Message($arr);
$insert= MessageDAO::createmessage($arr['_name'],$arr['_email'],$arr['_sms']);

echo "<center>Message Sent." . "<br><br>" . "<a href='sentItems.php'><button>Sent Items</button>"; 
echo "<a href='inboxpage.php'><button>Inbox</button></center>";


}
?>
