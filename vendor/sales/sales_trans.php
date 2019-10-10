<?php
   include('../config.php');
// Check connection
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
 <title>Sales Transaction List</title>
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
    font-size: 18px;
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
   font-size: 18px;
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
      font-size: 20px;
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
        <div><a href="../gallery/gallery.php"><i id="li" class="fas fa-arrow-left"></i></a>Vegetable Vendor Management System
        </div>
 </header>
  <main>
<div class="row">
    <div class="heading"><h2>Sales Transaction List</h2></div>
      <div class="description">
         <table>
 <tr>
  <th>Id</th> 
  <th>Name</th> 
  <th>Image</th>
  <th>Quantity</th>
  <th>Price</th>
 </tr>
 <?php
include('../config.php');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
 //submit button


    if(!empty($_POST['veg'])) {

        foreach($_POST['veg'] as $value){

  $sql = "SELECT Vid,name,image  FROM vegetables WHERE Vid='$value'";
  $result = $con->query($sql);
   while($row = $result->fetch_assoc()) {
    $id = ' .$row["Vid"].';
    echo '
          <tr>
            <td>' .$row["Vid"].' </td>
            <td>' .$row["name"].' </td>
            <td> <img src="images/'.$row['image'].'" width="100" height="100"></td>
             <td><input type="number" name="quantity"></td>
      <td><input type="number" name="quantity"></td>
          </tr>' ; 
    
}

}
echo "</table>";

}

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