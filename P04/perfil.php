<?php 
//definimos variables del formulario de registro
$nombreError = $apellidosErr = $emailErr = $edadErr = "";
$nombre = $apellidos = $email = $edad = "";
include_once 'classJugador.php';

//Comienza la sesion
session_start();

//Proceso para comprobar que los campos no esten vacios
   if (empty($_POST["UserName"])) {
     $nombreError = "Nombre se requiere";
   } else {
   $nombre=$_POST["UserName"];

   }
   
   if (empty($_POST["UserEmail"])) {
     $emailErr = "Email se requiere";
   } else {
   $email=$_POST["UserEmail"];
     
   }

   if (empty($_POST["UserAge"])) {
     $edadErr = "Edad se requiere";
   } else {
   $edad=$_POST["UserAge"];
   }

    
   if (empty($_POST["UserApe"])) {
     $apellidosErr = "Appellidos se requiere";
   } else {
   $apellidos=$_POST["UserApe"];
   }
   //Comprobamos que esten vacios
   $puntos=$_POST["UserPoints"];
if (isset($_POST['Submit'])){
  if((empty($_POST["UserName"]) || empty($_POST["UserEmail"]) || empty($_POST["UserAge"]) 
    || empty($_POST["UserApe"]) ))
 {
    echo "<script type='text/javascript'>var r = confirm('Faltan campos');
            if (r == true) {
                window.location.href = './index.php'; 
              }
          </script>";

    }else{
$_SESSION['jugador'] =new Jugador($nombre,$apellidos,$email,$edad,$puntos);

    //Si todos estan completados nos llevará a juego.php
  
      header( "Location: ./juego.php" );
    
    }
  }
   ?>


