<?php
//Métodos para cerrar la sesion y dirigirse al index.php
session_start();
session_destroy();
header('Location: ../index.php');
?>