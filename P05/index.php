
<?php include "header.php"; 
//Metodos para gestionar las sesiones
session_destroy();
session_start();

require_once('controller/basedatos.php');


?>
		<?php

		//Si la sesion no esta vacia  comprobará si el boton submit ha sido clickado
		if (isset($_SESSION['jugador'])) {
				


					header('Location: juego.php');
					

		} else{
		//Si la sesion  esta vacia incluirá el contenido para registrarse
}
					//header('Location: initial.php');



if (isset($_GET['$error'])){
  echo"asd";//echo '<div class="alert alert-error">'.$_GET['$error'].'</div>';
}
				
		 ?><?php
if (isset($_GET['error'])){
  echo '<div class="alert alert-danger"><b>Faltan estos campos: </b>'.$_GET['error'].'</div>';
}
        
     ?>
 <div class="jumbotron">
	<div class="container">
    
		<div class="row"><div class="col-lg-5 well" id="panelEntrar">
			
		<form class="form-horizontal  "method="post" action="controller/perfil.php">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" name="UserName"id="ejemplo_email_3"
             placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-6">
      <input type="password" class="form-control"name="UserPassword" id="ejemplo_password_3" 
             placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class=" col-lg-10">
      <button type="submit" name="SubmitLogin" class="btn btn-success " id="botonEntrar">Entrar</button>
    </div>
  </div>
</form>



			 </div>
		<div class="col-lg-5 well" id="panelRegistrar">
			
		<form class="form-horizontal  "method="post" action="controller/perfil.php">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" name="UserName"id="ejemplo_email_3"
             placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" name="UserApe" id="ejemplo_password_3" 
             placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-6">
      <input type="email" class="form-control"name="UserEmail"  id="ejemplo_password_3" 
             placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-6">
      <input type="password" class="form-control" name="UserPassword"  id="ejemplo_password_3" 
             placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Edad</label>
    <div class="col-lg-6">
      <input type="number" class="form-control"name="UserAge" id="ejemplo_password_3" 
             placeholder="Edad">
    </div>
  </div>
  <div class="form-group">
    <div class=" col-lg-10">
      <button type="submit" name="SubmitReg" class="btn btn-info " id="botonRegistrar">Registrase</button>
    </div>
  </div>
</form>


			
		</div>	 </div>
</div></div>
<?php  include "footer.php"; ?>
