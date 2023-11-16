<link rel="stylesheet" href="css/historico.css">
<main class="contenedor">
    <h2>Actividades</h2>
    <section class="tabla">
        <label class="encabezado">Número</label>
        <label class="encabezado">Ejercicio</label>
        <label class="encabezado">Descripción</label>
        <label class="encabezado">Editar</label>
        <label class="encabezado">Historial</label>
    </section>
    <?php 
    $tablaEjercicios = $admin->mostrarDatosActividades();
    if(empty($tablaEjercicios)){
        echo "<h2>No hay ejercicios</h2>";
    }else{
        foreach ($tablaEjercicios as $fila ) {
            echo'
            <div class="fila tabla">
                <label class="celda">'.$fila['id'].'</label> <!--Aqui va el numero de ejercicio desde la bdd-->
                <label class="celda">'.$fila['nombre'].'</label> <!--Aqui va el nombre de ejercicio desde la bdd-->
                <label class="celda">'.$fila['descripcion'].'</label><!--Aqui va la descripcion de ejercicio desde la bdd-->
                <a class="celda" href="?p=4'."&e=".$fila['id'].'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                        <path d="M13.5 6.5l4 4"></path>
                    </svg>
                </a>
                <a class="celda" href="?p=5'."&h=".$fila['id'].'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                    </svg>
                </a>
                <!-- mas filas y datos aquí -->
            </div>';
        }
    }
    ?>
</main>