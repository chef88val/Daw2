<?php 
//definimos variables del formulario de registro
  $error= "";
  $nombre = $apellidos = $email = $edad = $passW = "";
  include_once 'classJugador.php';
  include 'basedatos.php';
  $bbdd=new BaseDatos();//Creamos un objeto de tipo BaseDatos

//Comienza la sesion
session_start();

//Proceso para comprobar que los campos no esten vacios del formulario registro
if (isset($_POST['SubmitReg'])) {

    if (empty($_POST["UserName"]))
    {
      $error .= "Nombre ";
    } else {
      $nombre=$_POST["UserName"];

    }
     
    if (empty($_POST["UserEmail"]))
    {
      $error .= "Email ";
    } else {
      $email=$_POST["UserEmail"];
     
    }

    if (empty($_POST["UserAge"]))
    {
      $error .= "Edad ";
    } else {
      $edad=$_POST["UserAge"];
    }

      
    if (empty($_POST["UserApe"]))
    {
      $error .= "Apellidos ";
    } else {
      $apellidos=$_POST["UserApe"];
    }

    if (empty($_POST["UserPassword"]))
    {
      $error .= "Contra ";
    } else {
      $passW=$_POST["UserPassword"];
    }
     //Comprobamos que esten vacios
     $puntos=$_POST["UserPoints"];

    if(empty($_POST["UserName"]) || empty($_POST["UserApe"])|| empty($_POST["UserEmail"]) || empty($_POST["UserAge"] || empty($_POST["UserPassword"])) )
    {

      header("Location: ../index.php?error=$error");

    }else{

      //Si todos estan completados nos llevará a juego.php
      $bbdd->registrarUsuario($nombre,$apellidos,$email,$edad,0,$passW);
      echo "<script>alert('Ahora ya puedes iniciar sesion para poder jugar');window.location.href='../index.php';</script>";
      //header( "Location: ../index.php" );
    

    }
  } //Fin del formulario de registro
  else if (isset($_POST['SubmitLogin'])) {
//Proceso para comprobar que los campos no esten vacios del formulario registro
    if (empty($_POST["UserName"])) {
       $error .= "Nombre ";
     } else {
     $nombre=$_POST["UserName"];

     }
    if (empty($_POST["UserPassword"])) {
       $error .= "Contraseña ";
     } else {
     $passW=$_POST["UserPassword"];
     }

    if(empty($_POST["UserName"]) || empty($_POST["UserPassword"])){
      header("Location: ../index.php?error=$error");
    }else
        {
          $bbdd->comprobarConexion();

          $jugador= $bbdd->comprobarUsuario($nombre,$passW);    
          $_SESSION['jugador'] =new Jugador($jugador["id"],$jugador["nombre"],$jugador["apellidos"],$jugador["email"],$jugador["edad"],$jugador["puntos"],$jugador["password"]);

          header( "Location: ../juego.php" );           
        }
  }
  else if (isset($_POST["SubmitSave"])) {
    //Proceso para comprobar que los campos no esten vacios del formulario guardar cambios
    if (empty($_POST["UserNewPassword"])) {
      $bbdd->UpdateUsuario($_POST["UserID"],$_POST['UserName'],$_POST['UserApe'],$_POST['UserEmail'],$_POST['UserAge']);
    } else{
            $bbdd->UpdatePasswordUsuario($_POST["UserID"],$_POST['UserName'],$_POST['UserApe'],$_POST['UserEmail'],$_POST['UserAge'],$_POST['UserNewPassword']);
          }
      header("Location: ../juego.php");
    # code...
  }
?>




















