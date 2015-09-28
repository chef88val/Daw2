<html>
	<head>
		<title>CONTROL DE FLUJO IF PHP
		</title>
	</head>
	<body>
		<?php

			//DEfinimos dos numeros enteros
			$a=13;
			$b=5;

			//Imprimimos las variables
			echo "el valor de a es: " .$a."<br>";
			echo "el valor de b es: " .$b."<br>";

			//Linea de separacion
			echo "<br><hr>";

			//Probamos el condicional
			if ($a > $b) {
  				echo "a es mayor que b";
			}
			//Linea de separacion
			echo "<br>";
			
			//Probamos la estructura completa
			$b=14;
			if ($a > $b) {
   				echo "a es mayor que b";
			} elseif ($a == $b) {
    			echo "a es igual que b";
			} else {
    			echo "a es menor que b";
			}
		?>
	</body>
</html>