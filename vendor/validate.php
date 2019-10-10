<?php
include ('config.php');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

$usrname = $_POST['uname'];
$password = $_POST['pass'];

$sql = "SELECT * FROM cr_account WHERE Username = '$usrname' && Password = '$password' && Admin = 'FALSE'" ;
$result = $con->query($sql);
$count = $result->num_rows;

   if( $count == 1 )
   {
    header("Location:../userwelcome/usrwlcm.html");
}
else
{
    echo "error";
}
$sql1 = "SELECT * FROM cr_account WHERE Username = '$usrname' && Password = '$password' && Admin = 'TRUE'" ;
$result1 = $con->query($sql1);
$acount = $result1->num_rows;

   if( $acount == 1 )
   {
    header("Location:adminwelcome/adwlcm.html");
}
else
{
    echo "error";
}

?>