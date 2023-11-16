
<link rel="stylesheet" href="css/ejercicios.css">
<main class="contenedor">
    <div class="detalles__ejercicio">
        <label>Nivel: <?php echo $n; ?></label>
        <label>Ejercicio: <?php echo $e;?></label>
    </div>
    <section class="contenido__juegos">
        <?php
            echo $frames[$e-1]['frame'];//imprimir iframe
        ?>
       <!-- <iframe style="max-width:100%" src="https://wordwall.net/es/embed/531e8075a6fc41a3a29bb7f0e391b52c?themeId=44&templateId=73&fontStackId=0" width="500" height="380" frameborder="0" allowfullscreen></iframe> -->
    </section>
    <div class="contenedor__boton">
            <a class="boton w-sm-100"  href=<?php echo "?p=4&n=".$n."&e=".$e+=1; ?>>Siguiente</a>
    </div>
    <!--El proceso sera similar que el de adminEjercicios-->
</main>