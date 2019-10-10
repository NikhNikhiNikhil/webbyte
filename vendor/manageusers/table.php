<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
 <title>Users Data list</title>
 <style>
  .heading{
    float: left;
    width: 100%;
    height: auto;
    color: white;
    background-color: green;
    font-size: 20px;
  }
  .description{
    width: 100%;
    height: auto;
    background-color: white;
    font-size: 12px;
    padding: 10px;
  }
  .heading h2{
    text-align: center;
  }
  table {
    border-collapse: collapse;
   width: 100%;
   border: 1px solid grey;
   color: black;
   padding: 5px;
   font-size: 14px;
   text-align: center;
   background-color: f1f1f1;
     } 
  th {
    border: 1px solid grey;
    background-color: black;
   color: white;
   border-spacing: 5 35px;
   padding: 5px;
    }
    td{
      font-size: 14px;
      width: auto;
      height: auto;
      border: 1px solid grey;
    }
    button a{
      text-decoration: none;
      color: white;
    }
    button{
  cursor:pointer;
  width: 90%;
  padding: 5px;
  font-size: 10px;
  border:none;
  border-radius: 5px;
  background:black;
  color:#fff;
}
    button:hover{
      background-color: green;
    }
 </style>
</head>
<body>
<header>
        <div><a href="../adminwelcome/adwlcm.html"><i id="li" class="fas fa-arrow-left"></i></a>Vegetable Vendor Management System
        </div>
 </header>
  <main>
<div class="row">
    <div class="heading"><h2>Users Data List</h2></div>
      <div class="description">
         <table>
 <tr>
  <th>Id</th> 
  <th>Name</th> 
  <th>Middle Name</th>
  <th>Last Name</th>
  <th>Gender</th>
  <th>Date of Birth</th>
  <th>Address</th>
  <th>E-mail</th>
 <th>Phone no</th>
  <th>Date</th>
  <th>Username</th>
  <th>Password</th>
  <th>Status</th>
  <th>Action</th>

 </tr>
 <?php
$con = mysqli_connect("localhost", "root", "", "vendor");
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "SELECT `Uid`, `Name`, `mname`, `lname`, `Gender`, `Dob`, `Address`, `E-mail`, `Phno`, `Date`, `Username`, `Password`, `Status` FROM `cr_account`";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Uid"]. "</td><td>" . $row["Name"]. "</td><td>"
    . $row["mname"]. "</td><td>"
    . $row["lname"]. "</td><td>"
. $row["Gender"]. "</td><td>"
. $row["Dob"]. "</td><td>"
. $row["Address"]. "</td><td>"
. $row["E-mail"] . "</td><td>"
. $row["Phno"]. "</td><td>"
. $row["Date"]. "</td> <td>"
. $row["Username"] . "</td><td>"
. $row["Password"] . "</td><td>"
. $row["Status"] . "</td>"  ;
if($row["Username"] == NULL AND $row["Password"] == NULL)
{
  echo "<td><button type='submit'><a href='manage_users.php?id=".$row['Uid']."&name=".$row['Name']."'>OPEN</a></button></td></tr>";
}
else
{
  echo "<td><button type='submit'><a href='manage_users.php?id=".$row['Uid']."&name=".$row['Name']."'>EDIT</a></button></td></tr>";
}
}
echo "</table>";

} else { echo "0 results"; }
$con->close();

?>
</table>
    </div>    
  </main>
    <div id="footer">
    <div class="container">
      <div class="footer-social-media">
        <br><ul style="color: grey"><h3>Connect with Us:</h3>
        <li>
          <a href="https://www.facebook.com/ktwov.infotech"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/K2vInfotech"><i class="fab fa-twitter-square"></i></a>
        </li>
        <li>
          <a href="https://www.k2vinfotechllp.com"><i class="fab fa-google-plus-square"></i></a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/k2vinfotechllp"><i class="fab fa-linkedin"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCKMJult-oC8V5JboMKsTbbg"><i class="fab fa-youtube-square"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-mid-part">
      <ul class="mid-left" style="color: white;"><h4 style="color: grey;">Guided and Hosted by:</h4>
        <li>
          <h6>K2V INFOTECH LLP</h6><br>
          <i class="fas fa-map-marker-alt" style="color: grey;"> Address:</i>
          <h6>#1691,7th Cross,
          <br>E&F Block,Ramakrishna Nagar,
          <br>Mysuru-570027
          <br>Karnataka,India.
          </h6>
          <br><i class="fas fa-phone" style="color: grey;"> Phone:</i><br><a href="tel:9845182878">+91 9845182878</a><br><br><a href="https://www.k2vinfotechllp.com"><h4 style="color: grey;">Visit:<h4>www.k2vinfotechllp.com</a>
        </li>
      </ul>
        <ul  class="mid-right" style="color: white;"><h4 style="color: grey;">Handcrafted by:</h4>
        <li>
          Students of CSE Dept.,<br>MIT Mysore.
        </li>
      </ul>
    </div>
  </div>
  <div class="crfooter" style="clear: both;">
      <p>Copyright &copy; 2017. All rights reserved</p>
    </div>
  </body>
</html> 