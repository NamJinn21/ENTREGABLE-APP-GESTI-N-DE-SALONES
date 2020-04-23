<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" href="img/s1.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #2C54CB;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">GS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="salir.php" style="color :black"><span class="glyphicon glyphicon-user" ></span> Log Out</a></li>
    </ul>
  </div>
</nav>
    <p style=" font-size: 500%;
    color: white;">WEB EN CONSTRUCCIÓN</p>
    <br>
    <img src="img/s1.png" style="display:block; margin:auto;">
    
</body>
</html>
<?php
} else {
	header("location:index.php");
	}
 ?>