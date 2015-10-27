<?php
include 'functions.php';


if (isset ( $_POST ['nD1'] ) == "" || isset ( $_POST ['nD2'] ) == "") {
	echo "Algún campo está vacio";
} else {
	echo 'El dado 1 es: <span> <b>' . $_POST ['nD1'] . '</b>,</span>
				la operacion es: <span><b> ' . $_POST ['group1'] . '</b>,</span> el dado 2 es: <span><b>' . $_POST ['nD2'] . '</b></span>';
}

echo '<h6>-->'.$_POST ['d1'].'</h6>';echo '<h6><--'.$_POST ['d2'] .'</h6>';
if($_POST ['d1']== $_POST ['nD1']){
	echo "El dado1 es igual que el del usuario<br>";
	if($_POST ['d2']== $_POST ['nD2']){
		echo "El dado2 es igual que el del usuario";
	}else {echo "No coincide el valor del dado 2";}
} else {echo "No coincide el valor del dado 1";}


if (isset ( $_POST ['group1'] ) == "plus") {
	$res = $_POST ['nD1'] + $_POST ['nD2'];
}
if (isset ( $_POST ['group1'] ) == "plus") {
	$res = $_POST ['nD1'] - $_POST ['nD2'];
}

echo '<br>El resultado es: <span><b>' . $res . '</b></span>';
