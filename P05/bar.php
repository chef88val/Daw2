<?php 

//Incluimos el contenido del array para contruir el menú
		require("menu/array.php");
		
	?><nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href=<?=$menu["titulo"][url]?>><?=$menu["titulo"][$idioma]?></a>
		    </div>
		    <div>
		      <ul class="nav navbar-nav">

		        <li class="active"><a href=<?=$menu["portada"][url]?>><?=$menu["portada"][$idioma]?></a></li>
		        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=<?=$menu["tiposJuego"][url]?>><?=$menu["tiposJuego"][$idioma]?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          	<?php 
		          		foreach ($menu["tiposJuego"]["submenu"] as $key => $value) {
		          		?>
		          			<li><a href=<?=$value[url]?>><?=$value[$idioma]?></a></li>
		          		<?php
		          		}
		          	?>

		          </ul>
		        </li>
		        <li><a href=<?=$menu["instrucciones"][url]?>><?=$menu["instrucciones"][$idioma]?></a></li>
		      </ul>
		    </div>
		  </div>
		</nav>  


