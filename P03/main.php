<?php
require_once("menu/array.php");
include 'functions.php';
//require_once("dado.php") 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Proyecto 02: Dados</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	  <link rel="stylesheet" href="./css/bootstrap.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	
	<body>	 
        <!--Comienza la barra de navegacion-->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><?=$menu["titulo"][$idioma]?></a>
		    </div>
              <!--Comienza el menu-->
		    <div>
		       <ul class="nav navbar-nav">
		        <?php
		       /* $idioma="sp";
		        $menu = array(
		          "titulo"=>array("sp"=>"Math Dice","en"=>"Math Dice"),
		          "portada" => array("sp"=>"Inicio", "en"=>"Home"),
		          "instrucciones" => array("sp"=>"Instrucciones", "en"=>"Instruccions"),
		          "tipos de juego" => array("sp"=>"Tipos de juego", "en"=>"Game choice",
		            "submenu" => array(
		              "tipo1" => array("sp"=>"Juego Tradicional", "en"=>"Tradicional game",),
		              "tipo2" => array("sp"=>"Juego modificado", "en"=>"Game modified",),
		              "tipo3" => array("sp"=>"Juego niños", "en"=>"Kid game",)
		                      )
		            )
		        );*/
		
		//Aquí comienza el recorrido de la array
		        foreach ($menu as $valores => $value) {
		          foreach ($value as $key =>$valor ) {
		           echo"<li class=''> ";
		            if ($key == $idioma) {
		              if ($valores == "tipos de juego") {
		              echo "<a class='dropdown-toggle' 
		              data-toggle='dropdown' href='#''>
		              $valor<span class='caret'></span></a>";
		              echo "<ul class='dropdown-menu'>";
		
		              }else if ($valores == "titulo"){
		              	echo "";
		              }else echo "<a href=''>$valor</a>";
		//A partir de aquí busca los elementos padre que tienen hijos
		            }elseif ($key == "submenu" && $valores == "tipos de juego") {
		               echo"<li>";
		                foreach ($menu as $valores => $value) {
		                  foreach ($value as $key => $valor ) {
		                    foreach ($valor as $hijo => $value2) {
		                      foreach ($value2 as $key2 => $valor2) {
		                        if ($key2 == $idioma) {
		                           echo"<a href=''>$valor2</a>";
		                        }  
		                      }
		                    }
		                  }
		                }
		              echo "</ul>";
		              }
		            else
		            {
		              echo "</li>";
		            }
		          }
		            
		        }
		        ?>
		      </ul>
                <!--Finaliza el menu-->
		    </div>
		  </div>
		</nav>
		<!--Finaliza la barra de navegacion-->
		<!-- Comienza el contenido de la página -->
		<div>		
			<br>
			<div class="col-md-2"><!-- Columna de la izquierda -->			
				<span>Dado 1</span><br>				
				<?php /*Llamada de la funcion dado y almacenado en una variable*/$d1=dado();$d2=dado();?>
				<img alt="n<?=$d1; ?>"  src="./img/n<?=$d1; ?>.jpeg"><!-- En esta linea, se ha utilizado la variable que 
																	almacenaba el valor devuelto de la funcion dado -->
			</div>				
			
			
			<div class="col-md-4">
				<span>Dado 2</span><br>
				<img alt="n<?=$d2 ?>"  src="./img/n<?=$d2; ?>.jpeg">
			</div>				
		
			
			<div class="col-md-4" ><!-- Columna de la derecha -->
				<form action="action.php" method="post"><!-- Abrimos formulario para recoger y enviar valores a action.php -->
				<input type="text" name="d1" value="<?=$d1?>" hidden><input type="text" name="d2" value="<?=$d2?>" hidden>
				<!-- ^^^La linea crea un campo oculto para el usuario en el que se va a almacenar la 
				variable devuelta por la funcion dado, de este modo la funcion de comparar valores podrá usar ese valor-->
					<label>Introduce el valor de dado 1</label><br><input type="text" name="nD1">
					<br><br>
					<input type="radio" name="group1" value="plus" checked>+
					<input type="radio" name="group1" value="less">-<br>
					<br><br>
					<label>Introduce el valor de dado 2</label><br><input type="text" name="nD2">
					<br><br>
					<input type="submit" value="Calcular">
				</form><!-- Fin del formulario -->
			</div>
		</div>
	</body>
</html>
