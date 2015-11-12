<?php
include 'functions.php';
$res = 0;
$radio_value=$_POST['group1'];
#Comprobamos que no esten vacios los campos
if (isset ( $_POST ['nD1'] ) == "" || isset ( $_POST ['nD2'] ) == "") {
	echo "Algún campo está vacio";
} else {#Si no lo estan, comprobamos que los valores recogidos son correctos
	echo 'El dado 1 es: <span> <b>' . $_POST ['nD1'] . '</b>,</span>
				la operacion es: <span><b> ' . $_POST ['group1'] . '</b>,</span> 
						el dado 2 es: <span><b>' . $_POST ['nD2'] . '</b></span>';
}
#Aqui se comprueba si los valores son iguales, lo que llamariamos funcion comparar.
if ($_POST ['d1'] == $_POST ['nD1']) {
	echo "El dado1 es igual que el del usuario<br>";
	if ($_POST ['d2'] == $_POST ['nD2']) {
		echo "El dado2 es igual que el del usuario";
	} else {
		echo "No coincide el valor del dado 2";
	}
} else {
	echo "No coincide el valor del dado 1";
}

#Se resuelve la operacion segun la opción de operación que se haya seleccionado
if ( ( $_POST ['group1'] ) == "plus") {
	$res = $_POST ['nD1'] + $_POST ['nD2'];
}
if ( ( $_POST ['group1'] ) == "less") {
	$res = $_POST ['nD1'] - $_POST ['nD2'];
}
if ( ( $_POST ['group1'] ) == "mult") {
	$res = $_POST ['nD1'] * $_POST ['nD2'];
}
if ( ( $_POST ['group1'] ) == "div") {
	$res = $_POST ['nD1'] / $_POST ['nD2'];
}
#Muestra el resukltado
echo '<br>El resultado es: <span><b>' . $res . '</b></span>';
