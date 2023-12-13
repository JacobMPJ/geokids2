<?php

    require_once "Database.php";
    class Alumnos{
        var $id; 
        var $nombre;
        var $usuario;
        var $pass;
        var $tipo;
        private $db;

        function __construct(){
            $database = new Database();
            $this->db = $database->connect();

        }
//correcto
        function registrarAlumno(){
          $sql = "INSERT INTO Usuarios VALUES(null,'".$this->nombre."',0,'".$this->usuario."','".$this->pass."')";
          if(mysqli_query($this->db,$sql)){
           return true; 
          }
          return false;
        }
//correcto
        function iniciarSesion() {
            $sql = "SELECT usuario, password, tipo, nombre FROM Usuarios WHERE usuario = '".$this->usuario."' && password = '".$this->pass."';";

            if ($result = mysqli_query($this->db, $sql)) {
                $row = mysqli_fetch_assoc($result);
                if(isset($row['usuario']) && isset($row['password'])){
                    if($this->usuario == $row['usuario'] && $this->pass == $row['password']){   
                        $this->tipo = $row['tipo'];
                        $this->nombre = $row['nombre'];
                        return true;
                    }
                    return false;
                }
            }
        }
//corecto, pendiente de ver si necesita modificaciones
        function ejercicioSiguiente($nivel, $ejercicio){
            $sql = "SELECT  frame FROM Actividades WHERE nivel = '".$nivel."' && actividad = '".$ejercicio."';";
            if ($result = mysqli_query($this->db, $sql)) {
                $row = mysqli_fetch_assoc($result);
                if ($row !== null && array_key_exists('frame', $row)) {
                    return $row['frame'];
                }
                return -1; // Devuelve -1 si el valor es nulo
            } else {
                return -1; // Devuelve -1 en caso de error en la consulta
            }
        } 
//se supone que esta correcyo, pendiente de probar aqui
        function modificarDatosAlumno($user,$nuser, $pass){
            $sql = "UPDATE Usuarios SET usuario = '".$nuser."', password = '".$pass."' where usuario = '".$user."' ;";
            if(mysqli_query($this->db,$sql)){
             return true; 
            }
            return false;
        }
    }

?>