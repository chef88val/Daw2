<?php
//Declaracion de la clase Jugador
class Jugador
{
  // Propiedades
    // Declaración de una propiedad e inicializamos las variables
    private $nombre = '';
    private $apellidos ="";
    private $email ="";
    private $edad =0;
    private $passW = "";
    private $puntos =0;
    private $id =0;
    private $bbdd;
    
    //Creamos el contructor con argumentos
    function __construct($id,$nombre,$apellidos,$email,$edad,$puntos,$passW) {
       $this->id=$id;
       $this->nombre=$nombre;
       $this->apellidos=$apellidos;
       $this->email=$email;
       $this->edad=$edad;
       $this->password=$passW;
       $this->puntos=$puntos;
    }

    //METODOS
    // Función para obtener el valor de la propiedad nombre
     public function getID() {
        return $this->id;
    }

    //Funcion para cambiar el nombre de la propiedad nombre
    public function setID($id){
      $this->id=$id;
    }

    // Función para obtener el valor de la propiedad nombre
    public function getNombre() {
        return $this->nombre;
    }

    //Funcion para cambiar el nombre de la propiedad nombre
    public function setNombre($nombre){
      $this->nombre=$nombre;
    }


    //Función para obtener el valor de la propiedad apellidos
    public function getApellidos() {
        return $this->apellidos;
    }

    //Funcion para cambiar el nombre de la propiedad apellidos
    public function setApellidos($apellidos){
      $this->apellidos=$apellidos;
    }


    //Función para obtener el valor de la propiedad email
    public function getEmail() {
        return $this->email;
    }

    //Funcion para cambiar el nombre de la propiedad email
    public function setemail($email){
      $this->email=$email;
    }

    //Función para obtener el valor de la propiedad puntos
    public function getPassw() {
        return $this->password;
    }

    //Funcion para cambiar el nombre de la propiedad puntos
    public function setPassw($passW){
      $this->password=$passW;
    }

    //Función para obtener el valor de la propiedad edad
    public function getEdad() {
        return $this->edad;
    }

    //Funcion para cambiar el nombre de la propiedad edad
    public function setEdad($edad){
      $this->edad=$edad;
    }

    //Función para obtener el valor de la propiedad puntos
    public function getPuntos() {
        return $this->puntos;
    }

    //Funcion para cambiar el nombre de la propiedad puntos
    public function setPuntos($puntos){
      $this->puntos=$puntos;
    }


    
}
?>