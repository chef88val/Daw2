	<?php 
		include_once 'controller/classJugador.php';//Utilizará la clase contructor para almacenar posteriormente los elementos pertenecientes a jugador
		session_start();//Comienza la sesion
		$jugador= $_SESSION['jugador'];//Usamos el objeto previamente creado para poder utilizar sus metodos. Le asignamos los valores de sesion

		//Comprobamos que la sesion no esté vacia
		if (empty($jugador)) {
			echo("No has creado el usuario<br>");
			echo "<span>Crear<a href='./index.php'</a>usuario</span>";
			//header(" Location: index.php");
			# code...
		} else { include'header.php' ;

			//$jugador= $_SESSION['jugador'];

	?>
		
	<div class="panelJugador">
		<div style="border: 1px solid black;margin: 1px;padding: 5px;margin-bottom: 20px;" class="userData ">
			Bienvenido <a><?=$jugador->getNombre()?></a> tienes <?=$jugador->getPuntos() ?> puntos</div>

		<form method="post" action="controller/perfil.php">
			<label> Nombre:</label>
				<input type="text" size="20" name="UserName" value="<?=$jugador->getNombre()?>">				
				<br><br>
			<label> Apellidos:</label>
				<input type="text" size="20" name="UserApe" value="<?=$jugador->getApellidos()?>">
				<br><br>
			<label> Correo:</label>
				<input type="email" size="20" name="UserEmail"value="<?=$jugador->getEmail()?>">
			    <br><br>
			<label> Edad:</label>
				<input type="number" size="20" name="UserAge" value="<?=$jugador->getEdad()?>">
  				<br><br>
  				<label> Contraseña:</label>
				<input type="text" size="20" name="UserPassword" value="<?=$jugador->getPassw()?>">
  				<br><br>
  				<label> Nueva contraseña:</label>
				<input type="text" size="20" name="UserNewPassword" value="">
  				<br><br>
				<label hidden> Puntos:</label>
			<input type="number" size="20" name="UserPoints" value="<?=$jugador->getPuntos()?>"hidden>
				<label > ID:</label>
			<input type="text" size="20" name="UserID" value="<?=$jugador->getID()?>" readonly>
  				<br><br>

			<input type="submit" name="SubmitSave" value="Salvar datos">
		</form>
	</div>
	<?php 

	}//Cierre del else
	

	 ?>
	 <?php include'footer.php';?>