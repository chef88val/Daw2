<?php
//Declaracion de la clase BaseDatos
class BaseDatos
{
    //Variables de la clase
    private $host="localhost";
    private $db="mathDice";
    private $user="js_cmd";
    private $pass="js_cmd";
    private $conexion;
    
    //CREAMOS EL CONSTRUCTOR
    function __construct() {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    //Metodo para chequear la conexion
    function comprobarConexion(){
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
    }
    
    //Metodo para registrar un usuario
    function registrarUsuario($nombre,$apellidos,$email,$edad,$puntos,$passW)
    {
        $consulta ="INSERT INTO usuario (nombre,apellidos,email,edad,puntos,password)  VALUES ('$nombre','$apellidos','$email',$edad,$puntos,'$passW')";
        if($this->conexion->query($consulta))
        {
          
        }else{ 
            echo "Falló la creación de la tabla: (" . $this->conexion->errno . ")// " . $this->conexion->error."<br>";
        }
    }

    function comprobarUsuario($nombre,$passW)
    {
        $consulta ="SELECT * from usuario where nombre = '$nombre' and password = '$passW'";
        //echo $consulta;
        if($resultado= $this->conexion->query($consulta)){            
            if ( $resultado->num_rows!=0 ) {
                while($fila= $resultado->fetch_assoc())
                {
                    return $fila  ;
                }//Fin While
                $resultado->close();
            }else
                { 
                    $error="No se encuentra el usuario";
                }//Fin segundo if
            header("Location: ../index.php?error=$error");$conexion->close();
        }else
            {

            }//Fin primer if
    }

    //Metodo para actualizar valores de un usuario, pero manteniendo la contraseña
    function UpdateUsuario($id,$nombre,$apellidos,$email,$edad)
    {
        $consulta="UPDATE usuario set nombre='$nombre', apellidos='$apellidos',email='$email',edad='$edad' where id='$id' ";
        if($this->conexion->query($consulta))
        {
          
        }else
            { 
                echo "Falló la creación de la tabla: (" . $this->conexion->errno . ")// " . $this->conexion->error."<br>";
            }

    }
    //Metodo para actualizar valores de un usuario, pero cambiando la contraseña
    function UpdatePasswordUsuario($id,$nombre,$apellidos,$email,$edad,$passW)
    {
        $consulta="UPDATE usuario set nombre='$nombre', apellidos='$apellidos',email='$email',edad='$edad',password='$passW' where id='$id' ";
        if($this->conexion->query($consulta))
        {
              
        }else
            {
                echo "Falló la creación de la tabla: (" . $this->conexion->errno . ")// " . $this->conexion->error."<br>";
            }
    }

    //Actualizar puntos
    function UpdateMark($id)
    {
        $contador=5;
        $prevconsulta="SELECT puntos FROM usuario where id='$id' ";
        if($resultado= $this->conexion->query($prevconsulta)){            
            if ( $resultado->num_rows!=0 ) {
                while($fila= $resultado->fetch_assoc())
                {
                  $contador+=$fila["puntos"]  ;
                }
            $resultado->close();
            }else
                { 
                }
        }
        $consulta="UPDATE usuario set puntos='$contador' where id='$id' ";
        if($this->conexion->query($consulta))
        {
        }else
            {
                echo "Falló la creación de la tabla: (" . $this->conexion->errno . ")// " . $this->conexion->error."<br>";
            }

    }
    //Obtener valores segun el parametro
    function executeQuery($param,$id)
    {

        $consulta ="SELECT $param from usuario where id='$id'";
        if($resultado= $this->conexion->query($consulta)){            
            if ( $resultado->num_rows!=0 ) {
                while($fila= $resultado->fetch_assoc())
                {

                return $fila["$param"]  ;
                }//return $resultado->fetch_row();
            $resultado->close();
            }else
                { 
                }
            $conexion->close();
        }

    }


    
}
?>