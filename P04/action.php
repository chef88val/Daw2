<?php
//Llamamos al archivo que contiene funciones
	include 'functions.php';


//Comprobamos si se presiona el boton Calcular procedente de juego.php
	if (isset($_POST['Calcular'])) {

		//Creamos variable para registrar el input
		$valor=$_POST['valorFinal'];
		$expr=$_POST["expResultado"];

		//Almacenamos el primer valor para calcular
		$res=substr($expr,0);

		//Recorremos el string para analizar el tipo de caracter
			for($i=0;$i<=strlen($expr);$i++){ 
				for($i=0;$i<strlen($expr);$i++){
					if ( $expr{$i}  == "+") {
						$res=$res + $expr{$i+1};

					}else if ($expr{$i}  == "-") {
						$res=$res-$expr{$i+1};
					} else if ($expr{$i}  == "*") {
						$res=$res*$expr{$i+1};
					} else if ($expr{$i}  == "/") {
						$res=$res/$expr{$i+1};
					} 
				} 
			}
			$typegame= $_GET['type'];

			//Devolvemos el resultado y la comparacion
		header( "Location: ./pantallaFinal.php?type=$typegame&resultado=$res&valor=$valor");
	} else
		{ 
			//Si no se presiona nos lleva a main.php
		     header( "Location: ./main.php" );
		}


