<html>
<head>
    <title> Manage Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="../style.css">   
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
        .heading{
    width: 50%;
    height: auto;
    color: white;
    background-color: green;
    font-size: 20px;
  }
  .description{
    text-align: left;
    width: 50%;
    height: auto;
    background-color: white;
    font-size: 18px;
    padding: 10px;
  }
  .heading h2{
    text-align: center;
  }

#manageu {
  background:#F9F9F9;
  padding:25px;
  margin:50px 0;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#manageu input[type="text"]{
  width:100%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 5px;
  padding:10px;
}

#manageu [type="submit"]{
  cursor:pointer;
  width:auto;
  border:none;
  border-radius: 5px;
  background:black;
  color:#fff;
  margin:0 0 5px;
  padding:10px;
  font-size:15px;
}

#manageu [type="submit"]:hover{
  background:green;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}

#manageu input:focus,{
  outline:0;
  border:1px solid #999;
}

    </style>
</head>
<body>
<header>
        <div style="font-size: 20px;"><a href="../index.html"><i id="li" class="fas fa-arrow-left"></i></a>Vegetable Vendor Management System
        </div>
 </header>
<main>
  <center>
  <div class="row">
    <div class="heading"><h2>Manage Users</h2></div>
      <div class="description"> 
  <form id="manageu" method="post" action="account.php">
    <fieldset>
       User Id <input type="text" name="Useid" value="<?php echo $_GET['id']; ?>" required/>
    </fieldset>
    <fieldset>
      Name <input placeholder="Enter Vendor Name" type="text" name="name" value="<?php echo $_GET['name']; ?>" required/>
    </fieldset>
    <fieldset>
       Username <input placeholder="Enter User Name" type="text" name="name" required/>
    </fieldset>
       Password <input  placeholder="Enter Password" type="text" name="password" required/>
    </fieldset>
    <center><input type="submit" name="submit" value="submit"/></center>
  </form> 
</div>
</center>
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