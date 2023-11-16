<?php 
    $filaSeleccionada = $admin->mostrarUnaActividad($e);
?>
<link rel="stylesheet" href="css/tablaHistorico.css">
<main class="contenedor">
    <div class="volver">
        <a class="boton w-sm-100" href="?p=3">Volver</a>
    </div>
    <h2>Puntajes:</h2>
    <div class="contenido__score">
        <iframe class="score" src="<?php echo $filaSeleccionada['resultados'];?>" width="800" height="600" frameborder="0"></iframe>
    </div>
</main>