
<?php include "header.php"; ?>
	<body>	 

		<?php
		//Se crean las variables de la sesion
		$_SESSION["nombreUsuario"]="";
		$_SESSION["puntos"]=0;

		//Si se hace click sobre el boton de submit se pasará a initial
		if (!isset($_POST['submit'])) {
			include 'initial.php';
		}else{
			include('./juego.php');
			}	

		 ?>
<?php include "footer.php"; ?>
