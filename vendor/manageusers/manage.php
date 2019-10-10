<?php
	$link =  mysqli_connect("localhost", "root", "", "vendor");

 $Stat = "CLOSE";

 $uname =$_POST['name'];
 $pass = $_POST['password']; 
$id1 = $_POST['Useid'];
 

 /*$sql = "INSERT INTO `cr_account`(`Username`,`Password`) VALUES ('$uname','$pass')";
$run = mysqli_query($link,$sql);*/

$sql1="UPDATE `cr_account` SET `Username`= '$uname',`Password`='$pass' WHERE `Uid` = '$id1' ";
$result = $link->query($sql1);
echo $result;
$link->close();
header("Location:sms.php?id=".$id1.",&name=".$uname."&pass=".$pass."");

  
?>