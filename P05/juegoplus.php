
<?php 
		include "header.php"; 		//Incluirá los elementos del header
		require 'controller/functions.php';	//LLamará a las funciones que esten declaradas cuando estas se necesiten

		include_once 'controller/classJugador.php'; //Utilizará la clase contructor para almacenar posteriormente los elementos pertenecientes a jugador

//Comienza la sesion
session_start();
//Usamos el objeto previamente creado para poder utilizar sus metodos. Le asignamos los valores de sesion
$jugador= $_SESSION['jugador'];
//Comprobamos que la sesion no esté vacia
if(empty($jugador)){
	//echo "<script>javascript:window.location = 'index.php'</script>";
	include('initial.php');
}else{
	//Si no está vacia jugamos
?><nav>	
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Bienvenido <?= $jugador->getNombre()." ". $jugador->getApellidos() ." tienes "?>
		<?php 
		if (($jugador->getPuntos()=="")) {
		 	echo"0";
		 } else {
		 	echo $jugador->getPuntos();
		 }?> 
		  <?= ""." puntos" ;?></a></li>
  <li role="presentation"><a href='jugador.php'>Perfil</a></li>
  <li role="presentation"><a  class="btn btn-danger" onClick="javascript:document.location.href='controller/logout.php'">Terminar juego</a>  </li>    
</ul>
</nav>

<hr>		
 	</div>

			<div class="col-md-6"><!-- Columna de la izquierda -->			
				<div class="row">			
					<?php /*Llamada de la funcion dado y almacenado en una variable*/
					$d1=dado();$d2=dado();
					$d3=dado();$d4=dado();
					$d5=dado();$d6=dado();?>
					<div class="col-md-2"> 
						<div class="dado uno A" value="<?=$d1; ?>"><?=$d1; ?></div>
					</div>
					<div class="col-md-2"> 
						<div class="dado uno A" value="<?=$d3; ?>"><?=$d3; ?></div>
					</div>
					<div class="col-md-2"> 
						<div class="dado uno A" value="<?=$d5; ?>"><?=$d5; ?></div>
					</div>
				</div>	
			<br>
				<div class="row">
					<div class="col-md-6" >
						
						<div class="col-md-3" > 
							<div class="dado dos B"  value="<?=$d2; ?>"><?=$d2; ?></div>
						</div>
						<div class="col-md-3"> 
							<div class="dado dos B"  value="<?=$d4; ?>"><?=$d4; ?></div>
						</div>
					</div>
				</div>	
			<br>
				<div class="row">
					<div class="col-md-4" >
							<div class="dado tres C" name="valorFinal" value="<?=$d6; ?>"><?=$d6; ?></div>
					</div>				
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">				
							<div class="col-md-3"><div class="dado cuatro D"   value="+">+</div></div>	
							<div class="col-md-3"><div class="dado cuatro D"   value="-">-</div></div>	
							<div class="col-md-3"><div class="dado cuatro D"   value="*">*</div></div>	
							<div class="col-md-3"><div class="dado cuatro D"   value="/">/</div></div>	
					</div>			
				</div>		
				</div>
			
		
<?php //Si existe la variable resultado 
	if (isset($_GET['resultado'])) {
		include 'pantallaFinal.php'; 
	} else { ?>
		<div class="col-md-6" ><!-- Columna de la derecha -->
			<form method="post" action="controller/action.php?type=plus"><!-- TODO valores hidden -->
				<div class="row" id="divResultado"></div>
				<input type="submit" name="Calcular" value="Estas seguro?" class="btn btn-info buttonJugar"  onclick="">
				<input type="text" id="expResultado" name="expResultado" value="" hidden>

				<input type="text" id="expResultado" name="valorFinal" value="<?=$d6; ?>" hidden>

			</form>

		</div>
<?php }//Cierre de la linea 	if (isset($_GET['resultado'])) {
}//Cierre de la linea if(empty($jugador)){
 ?>
			<br>



<?php include'footer.php';?>
			