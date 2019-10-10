<?php

include('../config.php');
// Check connection
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  
if(isset($_POST['submit'])){

    if(!empty($_POST['veg'])) {

        foreach($_POST['veg'] as $value){

	$name1 = $_POST['name'];
	$mname = $_POST['name'];
	$lname = $_POST['image'];
	$gender = $_POST['r1'];
	$dob = $_POST['dob'];
$address = $_POST['address'];
$email = $_POST['mail'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `cr_account`(`Uid`,`Name`, `mname`, `lname`, `Gender`, `Dob`, `Address`, `E-mail`, `Phno`) VALUES ('$uid','$name1','$mname','$lname','$gender','$dob','$address','$email','$phone')";
$run = mysqli_query($con,$sql);
echo "$run";
if($run == TRUE)
{
   header("Location:registered.php");
   exit;
}
else{
   echo "error";
}
    mysqli_close($con);

?>