<?php //INITIAL.php ?>
		<div class="panelIni">
			<form method="post" action="perfil.php">
				<label> Nombre:</label>
					<input type="text" size="20" name="UserName">
					<span class="error">* <?php echo $nombreError;?></span>
					   <br><br>
				<label> Apellidos:</label>
					<input type="text" size="20" name="UserApe">
					<span class="error">* <?php echo $apellidosErr;?></span>
					<br><br>
				<label> Correo:</label>
					<input type="email" size="20" name="UserEmail">
					<span class="error">* <?php echo $emailErr;?></span>
				    <br><br>
				<label> Edad:</label>
					<input type="number" size="20" name="UserAge">
					<span class="error">* <?php echo $edadErr;?></span>
	  				<br><br>

				<input type="submit" name="Submit" value="Jugamos?">
			</form>
		</div>