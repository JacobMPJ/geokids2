<?php
$siEsVacio = empty($_GET["p"]);
$siExiste = isset($_GET["p"]);
$path = "vistas/admin/";
require_once "validaciones/v_login.php";
require_once "validaciones/v_admin.php";
$tablaEjercicios = array();
if (!$siEsVacio && $siExiste) {
    $numeroPagina = $_GET["p"];
    switch ($numeroPagina) {//cuerpo de la pagina
        case "1":
            require_once $path."vista_navegacion_admin.php";//header
            require_once $path."vista_admin.php";
            break;
        case "2":
            require_once $path."vista_navegacion_admin.php";//header
            require_once "vistas/vista_mi_cuenta.php";    
            break;        
        case "3":
            require_once $path."vista_navegacion_admin.php";//header
            require_once  $path."vista_ejercicios.php" ;
            break;
        case "4":
            if(empty($_GET['e'])){
                echo '<script>window.location.href = "?p=3";</script>';
                break;
            }else{
                $e = $_GET['e'];
                require_once $path."vista_navegacion_ejercicios.php";//header
                require_once  $path."vista_editar_actividades.php" ;
            }
            break;        
        case "5":
            if(empty($_GET['h'])){
                echo '<script>window.location.href = "?p=3";</script>';
                break;
            }else{
                $e = $_GET['h'];
                require_once $path."vista_navegacion_ejercicios.php";//header
                require_once $path."vista_tabla_resultados.php"; 
            }
            break;
        default:
            require_once $path."vista_navegacion_admin.php";//header
            require_once $path."vista_admin.php";
        break;
    }
}else{
    require_once $path."vista_navegacion_admin.php";//header    
    require_once $path."vista_admin.php";
}