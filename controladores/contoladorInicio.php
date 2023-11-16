<?php
if(empty($_SESSION['usr'])){
    $siEsVacio = empty($_GET["p"]);
    $siExiste = isset($_GET["p"]);
    $path = "vistas/inicio";

    require_once "validaciones/v_registro.php";
    require_once "validaciones/v_login.php";
    if (!$siEsVacio && $siExiste) {
        $numeroPagina = $_GET["p"];
        require_once $path."/vista_navegacion_inicio.php";//header
        switch ($numeroPagina) {//cuerpo de la pagina
            case 1:
                require_once $path."/vista_pagina_inicio.php";
                break;
            case 2:
                require_once $path."/vista_login.php" ;            
                break;
            case 3:
                require_once $path."/vista_singup.php";
                break;
            default:
                require_once $path."/vista_pagina_inicio.php";
                break;
        }
        require_once $path."/vista_footer.php";//footer
    }else{
        require_once $path."/vista_navegacion_inicio.php";
        require_once $path."/vista_pagina_inicio.php";
        require_once $path."/vista_footer.php";
    }
}else if($_SESSION['tipo'] == 1){
    require_once "controladores/controladorAdmin.php";
}else{
    require_once "controladores/controladorStart.php";
    //acomodar el controlador de admin  
}
?>