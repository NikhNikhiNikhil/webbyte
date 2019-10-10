<!DOCTYPE html>
<html>
  <head>
      <title>Add Vegetables</title>
      <link rel="stylesheet" type="text/css" href="../style.css">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
<script>
  function alert()
  {
    window.alert("SUCCESSFULLY INSERTED");
  }
</script>

<style type="text/css">
 .fpw-box{
    box-sizing: border-box;
    padding: 10px 30px;
}

  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
  .fpw-box input[type="submit"]
{
    cursor:pointer;
    width:25%;
    border:none;
    background:black;
    color:#FFF;
    margin:0 0 5px;
    padding:10px;
    font-size:15px;
    border-radius: 10px;
}
.fpw-box input[type="submit"]:hover
{
    background:green;
    color: #fff;
}
  .heading{
    width: 50%;
    height: auto;
    color: white;
    background-color: green;
    font-size: 20px;
    margin-left: 25%;
  }
  .description{
    width: 50%;
    height: auto;
    background-color: white;
    font-size: 18px;
    padding: 10px;
    margin-left: 25%;
  }
  .heading h2{
    text-align: center;
  }

</style>
  </head>
  <body>
    <header>
        <div style="font-size: 20px;"><a href="../index.html"><i id="li" class="fas fa-arrow-left"></i></a>Vegetable Vendor Management System
        </div>
 </header>
<main>
  <div class="row">
    <div class="heading"><h2>Add Vegetables</h2></div>
      <div class="description">
  <div class="fpw-box">
            <form method="POST" action="img_upload.php" enctype="multipart/form-data">
    <table>
<tr>
<td>
          <div>
          <br>
            <font color="black">Vegetable Name : </font><input placeholder="Enter Vegetable name" type="text" name="name1" required><br><br>
              <font color="black">Choose the Corresponding Image File </font><input type="file" name="pic" id="pic" name="image" size="60" accept="image/gif, image/jpeg, image/jpg" />
          </div>
            <br>
        <center><input type="submit" value="Save" name="name" onclick="alert();"></center>
      </form>
  </td>
</tr>
</table>
     
        
        </div>
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