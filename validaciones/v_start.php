<?php

$ibotonSave = isset($_POST["guardar"]);
if ($ibotonSave) {
        $auser = $_POST['user']; //usuario admin
        $apass = $_POST['npass']; //contraseña admin
        $anpass = $_POST['npass']; //nueva contraseña admin
        if (empty($auser) && empty ($apass) && empty($anpass)) {
            echo '<script>alert("Sin cambios");</script>';
        }else if(empty($auser) || empty($apass) || empty($anpass)){
            echo '<script>alert("Completa todos los campos");</script>';
        }else if($apass != $anpass){
            echo '<script>alert("Las contraseñas son incorrectas.\n Verificalas por favor");</script>';
        }else if(!$alumno->modificarDatosAlumno($_SESSION['usr'],$auser,$apass)){
            echo '<script>alert("No fue posible realizar cambios.\n Verifica los datos");</script>';
        }else{
            $_SESSION['usr'] = $auser;

            echo '<script>alert("Cambios realzados con exito");</script>';
        }  
        echo '<script>window.location.href = "?p=1";</script>';
        exit();
}
?>