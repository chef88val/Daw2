<html>
	<head>
		<title>CONTROL DE FLUJO IF PHP
		</title>
	</head>
	<body>
		<p>Introduce los numeros para calcular</p>
		<br>
		<form method="post">
			Introduce el primer numero<input type="text" name="a">
			Introduce el segundo numero<input type="text" name="b">
			<input type="submit" value="Asignar">
		</form>
		<?php
			$a = 0;
			$b = 0;

			//DEfinimos dos numeros enteros
		if (isset($_POST['a'])) {
			$a=($_POST['a']);
			}
		if (isset($_POST['b']) ) {
			
			$b=($_POST['b']);
			}

			//Imprimimos las variables
			echo "el valor de a es: " .$a."<br>";
			echo "el valor de b es: " .$b."<br>";

			//Linea de separacion
			echo "<br><hr>";

			//Probamos el condicional
			/*if ($a > $b) {
  				echo "a es mayor que b";
			}*/
			//Linea de separacion
			echo "<br>";
			
			//Probamos la estructura completa
			//$b=14;
			comparar_numeros($a,$b);

			function comparar_numeros($a,$b)
			{
					if ($a > $b) {
	   				echo "a es mayor que b";
				} elseif ($a == $b) {
	    			echo "a es igual que b";
				} else {
	    			echo "a es menor que b";
				}
			}
		?>


	</body>
</html>