<?php
$ibotonSave = isset($_POST["guardar"]);
$ibotonAdd = isset($_POST['agregar']);
$ibotonModify = isset($_POST['editar']);

//$llamadaEjercicio = isset("eventodelarow");
//la idea es jalar con un select * from y agregarlos a los sessions
//de ahi usar esas variables para modificar cada ejercicio segun las necesidades
//aasociar cuando elija modificar o ver la tabla la id de la etiqueta de ejercicio
//con la consulta que voy a realizar tanto en ?p=4 como en ?p=5
if ($ibotonSave) {
        $auser = $_POST['user']; //usuario admin
        $apass = $_POST['npass']; //contraseña admin
        $anpass = $_POST['npass']; //nueva contraseña admin
        if (empty($auser) && empty($apass) && empty($anpass)) {
            echo '<script>alert("Sin cambios");</script>';
        }else if(empty($auser) || empty($apass) || empty($anpass)){
            echo '<script>alert("Completa todos los campos");</script>';
        }else if($apass != $anpass){
            echo '<script>alert("Las contraseñas son incorrectas.\n Verificalas por favor");</script>';
        }else if(!$admin->modificarDatosAdmin($_SESSION['usr'],$auser,$apass)){
            echo '<script>alert("No fue posible realizar cambios.\n Verifica los datos");</script>';
        }else{
            $_SESSION['usr'] = $auser;
            echo '<script>alert("Cambios realzados con exito");</script>';
        }  
        echo '<script>window.location.href = "?p=1";</script>';
        exit();
}
if($ibotonAdd){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $nivel = $_POST['nivel'];
        $actividad = $_POST['actividad'];
        $resultados = $_POST['link'] ;
        $frame = $_POST['frame'];    
    if(empty($nombre) ||empty($descripcion) || empty($nivel) 
        || empty($actividad) || empty($resultados) ||empty($frame)){
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
    //        echo '<script>window.location.href = "?p=1";</script>';
    }else{
        $admin->estado = 1; //siempre dara por defecto valor de 1 a la actividad, quiere decir que estara activa
        $admin->nombre = $_POST['nombre'];
        $admin->descripcion = $_POST['descripcion'];
        $admin->nivel = $_POST['nivel'];
        $admin->actividad = $_POST['actividad'];
        $admin->resultados = $_POST['link'] ;
        $admin->frame = $_POST['frame'];
        $exitoso = $admin->registrarActividad();
        if(!$exitoso){
            echo '<script>alert("No fue posible agregar la actividad. \nIntentalo nuevamente");</script>';
        }else{
            echo '<script>alert("La actividad se agrego de manera exitosa.");</script>';
        }
    }
    echo '<script>window.location.href = "?p=3";</script>';   
    exit();
}
if($ibotonModify){
    //echo "Se modifico \n" ;
    if(!isset($_POST['estado']) && empty($_POST['estado'])) 
    {$_POST['estado'] = 1 ;}   
    $estado = $_POST['estado'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $nivel = $_POST['nivel'];
    $actividad = $_POST['actividad'];
    $link = $_POST['link'] ;
    $frame = $_POST['frame'];    
    if(empty($nombre) ||empty($descripcion) || empty($nivel) 
        || empty($actividad) || empty($link) ||empty($frame)){
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
    //        echo '<script>window.location.href = "?p=1";</script>';
    }else{
        $id;
        if (isset($_GET['e'])) {
            $id = $_GET['e'];

        } else {
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
        }
        $admin->id = $id;
        $admin->estado = $estado; //siempre dara por defecto valor de 1 a la actividad, quiere decir que estara activa
        $admin->nombre = $nombre;
        $admin->descripcion = $descripcion;
        $admin->nivel = $nivel;
        $admin->actividad = $actividad;
        $admin->resultados = $link;
        $admin->frame = $frame;
        $exitoso = $admin->modificarDatosActividad();
        if(!$exitoso){
            echo '<script>alert("No fue posible modificar. \nIntentalo nuevamente");</script>';
        }else{
            echo '<script>alert("La actividad se modifico de manera exitosa.");</script>';
        }
    }
    echo '<script>window.location.href = "?p=3";</script>';   
}
//agregar if del row
?>