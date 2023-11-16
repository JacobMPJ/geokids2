<?php
$boton = isset($_POST["registrar"]);

    if ($boton) {
        $name = $_POST["nombre"];
        $user = $_POST["usuario"];
        $pass = $_POST["pass"];
        $c_pass = $_POST["confirm"];

        if ((empty($name) || empty($user) || empty($pass) || empty($c_pass))) {
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }else if($pass != $c_pass){
            echo '<script>alert("Las contraseñas son incorrectas. Verificalas por favor");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }
        $alumno->nombre = $_POST["nombre"];
        $alumno->usuario = $_POST["usuario"];
        $alumno->pass = $_POST["pass"];
           
        if (!$alumno->registrarAlumno()) {
            echo '<script>alert("No se ha podido completar el registro.");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }else{
            echo '<script>alert("Registro Correcto");</script>';
            echo '<script>window.location.href = "index.php?p=2";</script>';
        exit();
        }
    }        
?>
