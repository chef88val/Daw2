<?php
require_once("menu/array.php");
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
		<div>
			<div id="superior">
			<?php //Bucle for para recorrer todas las imagenes que se van a añadir despues
                for ($i = 1; $i<=6;$i++) { 
			echo "<div class='col-md-2'>";
			echo "<img alt='n$i'  src='./img/n$i.jpeg'>";
			echo "</div>";
			}
			?>
			</div>
			<br>
			<div id="inferior">
				<div class='col-md-2'>Dado aleatorio</div>				
				<?php //Funcion que devuelve el numero aleatorio para dos lineas mas abajo añadir el valor devuelto y que se corresponda con el fichero de la carpeta
                    function dado($lados){ $ale=mt_rand(1,$lados); return $ale;} ?>
				<!-- //echo "<img alt='n$i'  src='./img/n$ale.jpeg'>";  -->
				<div class='col-md-2'><img alt="n<?=dado(); ?>"  src="./img/n<?=dado(); ?>.jpeg"></div>
				
			</div>
		</div>
	</body>
</html>
