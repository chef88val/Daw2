
<?php session_start(); include "header.php"; ?>
	<div style="border: 1px solid black;margin: 1px;padding: 5px;margin-bottom: 20px;" class="userData ">Bienvenido <a><?=$_SESSION['name_user']?></a>
 	<span style="float: right;">Tienes <?php echo $_SESSION["puntos"]; ?> puntos</span></div>

	<div class="row" style="margin-left: 30%;">
		<div class="col-md-6">
			<?php 

			//Comprobamos si se existen las variables necesarias
				if (isset($_GET['resultado'])&& isset($_GET['valor']) ){
					//Comprobamos que resultado de la funcion y del valor instroducido por el usuario coinciden
					if (($_GET['resultado']) == $_GET['valor']){ 
						$_SESSION["puntos"]+=5;?>
						<div class="dado divResultado2 ">
						<?php echo $_GET['resultado'];?>
						</div>
			<?php   
					}else{
						//Si NO coinciden...
						?>
						<div class="dado  divResultado3">
						<?php echo "Dijiste <span id='valorerror'>".$_GET['valor']."</span> y era <span>".$_GET['resultado']."</span>";?>

						</div>
			<?php 
					}
				} ?>


			<h1><a href="./juego.php">Volver a empezar!</a></h1>
		</div>
	</div>

