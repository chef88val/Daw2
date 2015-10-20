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
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><?=$menu["titulo"][$idioma]?></a>
		    </div>
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
		    </div>
		  </div>
		</nav>
		
		<div>
			<div id="superior">
			<?php for ($i = 1; $i<=6;$i++) { 
			echo "<div class='col-md-2'>";
			echo "<img alt='n$i'  src='./img/n$i.jpeg'>";
			echo "</div>";
			}
			?>
			</div>
			<br>
			<div id="inferior">
				<div class='col-md-2'>Dado aleatorio</div>				
				<?php function dado(){ $ale=mt_rand(1,6); return $ale;} ?>
				<!-- //echo "<img alt='n$i'  src='./img/n$ale.jpeg'>";  -->
				<div class='col-md-2'><img alt="n<?=dado(); ?>"  src="./img/n<?=dado(); ?>.jpeg"></div>
				
			</div>
		</div>
	</body>
</html>
