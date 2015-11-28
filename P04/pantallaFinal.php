
<?php 
	include "header.php";  
		include_once 'classJugador.php';//Utilizará la clase contructor para almacenar posteriormente los elementos pertenecientes a jugador
		session_start();//Comienza la sesion
		$jugador= $_SESSION['jugador'];//Usamos el objeto previamente creado para poder utilizar sus metodos. Le asignamos los valores de sesion
?>	
	<div class="row" style="margin-left: 30%;">
		<div class="col-md-6">
			<?php 

			//Comprobamos si se existen las variables necesarias
				if (isset($_GET['resultado'])&& isset($_GET['valor']) ){
					//Comprobamos que resultado de la funcion y del valor instroducido por el usuario coinciden
					if (($_GET['resultado']) == $_GET['valor']){ 
						$contador=$jugador->getPuntos();
						$jugador->setPuntos($contador+5); ?>
						<div class="dado divResultado2 ">
						<?php echo $_GET['resultado'];


						?>
						</div>
			<?php   
					}else{
						//Si NO coinciden...
						?>
						<div class="dado  divResultado3">
						<?php echo "Dijiste <span id='valorerror'>".$_GET['resultado']."</span> y era <span>".$_GET['valor']."</span>";?>

						</div>
			<?php 
					}
				} ?>


			<h1><a href="./juego.php?contador=$contador">Volver a empezar!</a></h1>
		</div>
	</div>

