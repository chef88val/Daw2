
<?php 
	include "header.php";  
	require_once 'controller/basedatos.php';
	include_once 'controller/classJugador.php';//Utilizará la clase contructor para almacenar posteriormente los elementos pertenecientes a jugador
	session_start();//Comienza la sesion
	$jugador= $_SESSION['jugador'];
	$bbdd=new BaseDatos();//Creamos un objeto de tipo BaseDatos
?>	
	<div class="row" style="margin-left: 30%;">
		<div class="col-md-6">
			<?php 
			//Comprobamos si se existen las variables necesarias
				if (isset($_GET['resultado'])&& isset($_GET['valor']) )
				{
					//Comprobamos que resultado de la funcion y del valor instroducido por el usuario coinciden
					if (($_GET['resultado']) == $_GET['valor']){ 
						$puntos=$bbdd->UpdateMark($jugador->getID());
						$jugador->setPuntos($bbdd->executeQuery("puntos",$jugador->getID()));
						 ?>
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
					<?php }	
				} ?>


			<h1>
				<?php if ($_GET['type']=="normal") {?>
						<a class="btn btn-success " href="./juego.php">Volver a empezar!</a></h1>

				<?php }else {?>

						<a href="./juegoplus.php">Volver a empezar!</a></h1>
				 <?php }?>

		</div>
	</div>
<?php include'footer.php';?>
