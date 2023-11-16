<?php
$botonLogin = isset($_POST["ini"]);
$botonLogout = isset($_POST['logout']);
$ibotonSave = isset($_POST["guardar"]);
    if ($botonLogin) {

        $alumno->usuario = $_POST["user"]; //usuario
        $alumno->pass = $_POST["cont"]; //contraseña

        if (empty($alumno->usuario) || empty($alumno->pass)) {
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }else if(!$alumno->iniciarSesion()){
            echo '<script>alert("Las credenciales son incorrectas. Verificalas por favor");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }else{
            //datos para el usuario
            $_SESSION['usr'] = $alumno->usuario;
            $_SESSION['tipo'] = $alumno->tipo;
            $_SESSION['nombre'] = $alumno->nombre;
            echo '<script>alert("Bienvenido, disfrute su estancia   ");</script>';
            echo '<script>window.location.href = "?p=1";</script>';
        }
    }
    if($botonLogout){
        session_destroy();
        echo '<script>alert("Vuelve pronto :).");</script>';
        echo '<script>window.location.href = "./?p=2";</script>';
        exit();
    }
?>