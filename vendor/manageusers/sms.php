<?php

	$con = mysqli_connect("localhost","root","","vendor");
	$id=$_GET['id'];
	$name=$_GET['name'];
	$pass=$_GET['pass'];
	// Authorisation details.
	$username = "pavithrap1011998@gmail.com";
	$hash = "1b9db591e9084c621c716c5baf137d40a47360c2bda90a226ce51c5482bc883c";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$sql = "SELECT * FROM `cr_account` WHERE `Uid`='$id' "; 
	$res = $con->query($sql);
	$row = $res->fetch_assoc();
	$numbers = $row["Phno"]; // A single number or a comma-seperated list of numbers
	echo $numbers;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message1 = urlencode($name);
	$message2 = urlencode($pass);
	$data1 = "username=".$username."&hash=".$hash."&message=".$message1."&message=".$message2."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$data2 = "username=".$username."&hash=".$hash."&message=".$message2."&message=".$message2."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
?>