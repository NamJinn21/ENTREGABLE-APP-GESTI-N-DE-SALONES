<?php 
	session_start();

	if(isset($_SESSION['user'])){
        header("location:home.php");
 ?>
 <?php
} else {
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style3.css">
  <link rel="shortcut icon" href="img/s1.ico" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: #2C54CB;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" >GS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="login.php" style="color :black"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">

		<div id="principal">
			<header>
				<div id="logo">
					<h2 class="titulo">App Gestion de Salones</h2>
				</div>
				
			</header>

			<section id="slide">
				<img src="img/slide.jpg" width="900" height="250">
			</section>
				<section>
						<h2>Bienvenidos</h2>
					<p class="parrafo">
						Se busca mejorar el recorrido o la facilidad al llevar un proceso como lo es el gestionar una reservacion de un salon a un usuario no a fin con la compañia, brindandole la facilidad y confianza de hacerlo y que pueda tener la mejor gestion de sus eventos.
                    </p>
                    
                </section>
               
			

			
        </div>
        <img src="img/s1.png" style="display:block; margin:auto;">
        
</div>

</body>
</html>
<?php
}
 ?>