<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="shortcut icon" href="img/s1.ico" type="image/x-icon">
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>LOGIN</h1>
        
		<form action='conexion.php' method="post">
			<input placeholder="Usuario" name='txtusuario'>
			<input type="password" placeholder="Contraseña" name='txtpass'>
			<button type="submit" name="login">Login</button>
			<a href="index.php" style="color :white"><span class="glyphicon glyphicon-arrow-left"></span><br> Volver</a>
		</form>
        
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
