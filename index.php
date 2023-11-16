<?php
    session_start();
    require_once "modelos/Alumno.php";
    require_once "modelos/Admin.php";
    $alumno = new Alumnos(); 
    $admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">

    <title>GEOKIDS</title>
</head>

<body>
    <header class="header">
        <h1> <img class="icono-geo" src="img/icon-index.png">GEOKIDS</h1>
    </header>
    <?php
    require_once './controladores/contoladorInicio.php';
    ?>
</body>

</html>