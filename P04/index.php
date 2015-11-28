
<?php include "header.php"; 
//Metodos para gestionar las sesiones
session_destroy();
session_start();
?>
	<body>	 

		<?php

		//Si la sesion no esta vacia  comprobará si el boton submit ha sido clickado
		if (empty($_SESSION['jugador'])) {
				if (!isset($_POST['submit'])) {	


				}else{


					include('./juego.php');
					}	

		} 
		//Si la sesion  esta vacia incluirá el contenido para registrarse

					include 'initial.php';




				
		 ?>
<?php include "footer.php"; ?>
