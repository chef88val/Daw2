
<?php session_start();$_SESSION["puntos"]; include "header.php"; ?>

	<div style="border: 1px solid black;margin: 1px;padding: 5px;margin-bottom: 20px;" class="userData ">Bienvenido <a><?=$_SESSION['name_user']?></a>
 	<span style="float: right;">Tienes <?php echo $_SESSION["puntos"]; ?> puntos</span></div>
	
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
					</div>				
				</div>		
				</div>
			
		
<?php //Si existe la variable resultado 
	if (isset($_GET['resultado'])) {
		include 'pantallaFinal.php'; 
	} else { ?>
		<div class="col-md-6" ><!-- Columna de la derecha -->
			<form method="post" action="action.php?"><!-- TODO valores hidden -->
				<div class="row" id="divResultado"></div>
				<input type="submit" name="Calcular" value="Estas seguro?" class="buttonJugar" onclick="">
				<input type="text" id="expResultado" name="expResultado" value="" hidden>

				<input type="text" id="expResultado" name="valorFinal" value="<?=$d6; ?>" hidden>

			</form>

		</div>
<?php } ?>
			<br>
			