<?php
    require_once "Database.php";
    class Admin{
        var $id;
        var $estado;
        var $nombre;
        var $descripcion;
        var $nivel;
        var $actividad;
        var $resultados;
        var $frame;

        var $ejercicios = array();
        private $db;
        function __construct(){
            $database = new Database();
            $this->db = $database->connect();
        }
        //Crud de ejercicios
        function registrarActividad(){
//correcto
        $sqlInsert = "INSERT INTO Actividades VALUES (null ,".$this->estado.", '".$this->nombre."','".$this->descripcion."',".$this->nivel.",".$this->actividad.",'".$this->resultados."','".$this->frame."');";
        if(mysqli_query($this->db,$sqlInsert)){
           return true; 
          }
          return false;
        }
//correcto
        function modificarDatosAdmin($user,$nuser, $pass){
            $sql = "UPDATE Usuarios SET usuario = '".$nuser."', password = '".$pass."' where usuario = '".$user."' ;";
            if(mysqli_query($this->db,$sql)){
             return true; 
            }
            return false;
        }
//correcto
        function modificarDatosActividad(){
            $sql = "UPDATE Actividades SET 
            estado = ".$this->estado.", 
            nombre = '".$this->nombre."',
            descripcion = '".$this->descripcion."',
            nivel = '".$this->nivel."',
            actividad = '".$this->actividad."', 
            resultados = '".$this->resultados."',
            frame = '".$this->frame."'
            where id = ".$this->id." ;";
            //echo $sql;
            if(mysqli_query($this->db,$sql)){
             return true; 
            }
            return false;
        }
//correcto
        function mostrarDatosActividades(){
            $sql = "SELECT * FROM Actividades;";
            //echo  $sql
            //query = SELECT * FROM Actividades;
            if ($consult = mysqli_query($this->db,$sql)) {
                while ($row = mysqli_fetch_assoc($consult)) {
                    $ejercicios[] = $row;
                }
            }
            return $ejercicios;
        }
// correcto
        function mostrarUnaActividad($ide){
            $sql = "SELECT * FROM Actividades where id = ".$ide." ;";
            if ($result = mysqli_query($this->db, $sql)) {
                $row = mysqli_fetch_assoc($result);
                if ($row !== null) {
                    return $row;
                }
                return -1; // Devuelve -1 si el valor es nulo
            } else {
                return -1; // Devuelve -1 en caso de error en la consulta
            }
        }
//probar
        function seleccionarEjercicios($nivel){
            $sql = "SELECT  id,frame, actividad FROM Actividades WHERE nivel = '".$nivel."' ;";
            if ($result = mysqli_query($this->db, $sql)) {
                while($row = mysqli_fetch_assoc($result)){
                    $ejercicios[] = $row;
                }
            }else{
                return -1; //deveuelve -1 su la consulta exise
            }
            return $ejercicios;
        }
        
}

?>