<?php
$idioma= "sp";
$menu = array
		(
			"titulo"=>array("sp"=>"Math Dice","en"=>"Math Dice","url"=>"index.php"),
			"portada" => array("sp"=>"Inicio", "en"=>"Home","url"=>"juego.php"),
			"instrucciones" => array("sp"=>"Instrucciones", "en"=>"Instruccions"),
			"tipos de juego" => array("sp"=>"Tipos de juego", "en"=>"Game choice",
				"submenu" => array(
					"tipo1" => array("sp"=>"Juego Tradicional", "en"=>"Tradicional game"),
					"tipo2" => array("sp"=>"Juego modificado", "en"=>"Game modified"),
					"tipo3" => array("sp"=>"Juego niños", "en"=>"Kid game")
								  )
				)
		);

?>