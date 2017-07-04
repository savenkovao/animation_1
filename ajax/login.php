<?php 
	$name = $_POST['name'].' Human';
	$age = $_POST['age']/12*32;

	sleep(3);
	echo 'This is login response from php server.<br>
	 Posted data: name - '.$_POST['name'].', age - '.$_POST['age'].'<br>
	 Received data: name - '.$name.', age - '.$age;

?>