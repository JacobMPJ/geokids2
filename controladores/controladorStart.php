<?php
$siEsVacio = empty($_GET["p"]);
$siExiste = isset($_GET["p"]);
$path = "vistas/start/";
if (!$siEsVacio && $siExiste) {
    $numeroPagina = $_GET["p"];
    require_once "validaciones/v_login.php";
    require_once "validaciones/v_start.php";
    require_once $path."vista_navegacion_start.php";//header
    switch ($numeroPagina) {//cuerpo de la pagina
        case "1":
            require_once $path."vista_contenido_start.php";
            break;
        case "2":
            //require_once "validaciones/v_start.php";
            require_once "vistas/vista_mi_cuenta.php";    
            break;        
        case "3":
            require_once  $path."vista_niveles.php" ;
            break;
        case "4":  
                if(empty($_GET['e'])){
                    $e = 1;//tenian valor de 1
                }else{
                    $e = $_GET['e'];
                }
                if(empty($_GET['n'])){
                    $n = 1;//valor de 1
                }else{
                    $n = $_GET['n'];
                }
                $frames = $admin->seleccionarEjercicios($n);//aqui iba el de ejercicio siguiente
                if ($frames != -1 && $e <= count($frames) ) {
                    require_once $path."vista_ejercicios.php";
                } else {
                    echo '<script>alert("Bloque de ejercicios Terminados.\nContiua en el siguiente nivel :)");</script>';
                   echo '<script>window.location.href = "?p=3";</script>';
                }
            break;

        default:
            require_once $path."vista_contenido_start";
             break;
    }

}else{
    require_once $path."vista_navegacion_start.php";
    require_once $path."vista_contenido_start.php";

}
