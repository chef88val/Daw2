<?php
class Jugador
{
  // Propiedades
    // Declaración de una propiedad e inicializamos las variables
    private $nombre = 'Jugador 1';
    public $apellidos ="";
    public $email ="";
    public $edad =0;
    public $puntos =0;
    
    //Creamos el contructor con argumentos
    function __construct($nombre,$apellidos,$email,$edad,$puntos) {
       $this->nombre=$nombre;
       $this->apellidos=$apellidos;
       $this->email=$email;
       $this->edad=$edad;
       $this->puntos=$puntos;
    }

    //METODOS
    // Función para obtener el valor de la propiedad nombre
     function getNombre() {
        echo $this->nombre;
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