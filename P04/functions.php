<?php
#Función que nos devuelve el valor del random
function dado() {
	$ale = mt_rand ( 1, 6 );
	return $ale;
}

