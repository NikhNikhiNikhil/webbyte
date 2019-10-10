<?php

$con = mysqli_connect('localhost','root','','vendor');


$name1 = $_POST['name'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['r1'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$email = $_POST['mail'];
$phone = $_POST['phone'];
$status = "OPEN";
$uid = "u3";
$admin="FALSE"

$sql = "INSERT INTO `cr_account`(`Uid`,`Name`, `mname`, `lname`, `Gender`, `Dob`, `Address`, `E-mail`, `Phno`,`Admin`) VALUES ('$uid','$name1','$mname','$lname','$gender','$dob','$address','$email','$phone','$admin')";
$result = $con->query($sql);
echo "$result";
if($result == TRUE)
{
   header("Location:registered.php");
   exit;
}
else{
   echo "error";
}
    mysqli_close($con);

?>