<?php

$con = mysqli_connect('localhost','root','','vendor');

$uid = "u3";
$name = $_POST['name'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$status = "CLOSE";


$sql = "INSERT INTO `cr_account`(`Uid`,`Name`,`Username`,`Password`) VALUES ('$uid','$name','$Username','$Password')";
$result = $con->query($sql);
echo "$result";
if($result == TRUE)
{
   header("Location:table.php");
   exit;
}
else{
   echo "error";
}
    mysqli_close($con);

?>