<!DOCTYPE html>
<html>
<head>
 <title>manage_users</title>
 <style>
    	<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
 *{
	margin:0;
	padding:0;
	box-sizing:border-box;
}

body{
	font-family:Arial,Helvetica,Sans-serif;
	background-color: : #f1f1f1;
	padding-bottom: 50px;
	position: relative;
	min-height: 100vh;
}

footer{
	background-color: #000;
	position: absolute;
	text-align: center;
	color: #fff;
	padding: 20px;
	bottom: 0;
	width: 100%;
}

header{
	font-family:Arial,Helvetica,Sans-serif;
	text-align: center;
	background-color: #000;
	color: #fff;
	padding: 12px;
	width: 100%;
	margin-bottom: 30px;
	float: right;
}

main{
	width: 90vw;
	margin: 0 auto;
	padding: 30px 20px;
}

.fa{
	color: white;
	position: static;
	transition: 0.6s ease;
}
.ab{
	float: right;
	padding: 0;
		position: static;
}
.fa:hover{
	color: green;
}
button{
	float: left;
	border-radius: 5px;
	border: .6px solid #000;
	transition: 0.6s ease;

}
button:hover{
	background-color:green;
}


.login-box{
    width: 320px;
    height: 420px;
    background: black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
 
}


  table {
   border-collapse: seperate;
   width: 50%; 
   color: black;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
    border-spacing: 0 25px;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}

 </style>
</head>
<body>
<header>
				<div><h3><button><a href= "table.php">Back</a></button>Vegetable Vendor Management System<a href= "#" class="ab"><i style="font-size: 20px;" class='fa fa-home'></i></a></h3>
				</div>
 </header>
	<main>
<center>
<div class="login-box">
<h1>MANAGE USERS</h1>
<form action="manage.php" method="post">
    Userid :<input type="text" name="Useid" value="<?php echo $_GET['id']; ?>"/></br><br>
    Name :<input type="text" name="name" value="<?php echo $_GET['name']; ?>"/></br><br>
    Username :<input type="text" name="name"/></br><br>
    Password :<input type="text" name="password"/></br><br>
    <input type="submit" name="submit" value="submit"/><br>
</form>
</div>
</center>

</table>

</main>
	<footer>
	<p>Designed By Student's Of Mit,mysore</p>
</footer>
</body>
</html>
