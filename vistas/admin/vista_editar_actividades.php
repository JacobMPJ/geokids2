<?php 
    $filaSeleccionada = $admin->mostrarUnaActividad($e);
?>
<link rel="stylesheet" href="css/admin.css">
<main class="contenedor">
    <section>
        <h2>Editar Actividad: <?php echo " ".$e ;?> </h2>
        <form method="POST" class="formulario" action=<?php echo "?p=4&e=".$e=$e;?> autocomplete="off">
            <fieldset>
                <legend>Modifica tus actividad</legend>
                <div class="contenedor__campos">
                    <div class="campo">
                        <select class="formulario__campo" name="estado">
                            <option disabled selected> -- Seleccionar estado -- </option>
                            <option value="1">Habilitado</option>
                            <option value="0">Deshabilitado</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label>Nombre del juego: </label>
                        <input class="input-text" type="text" name="nombre" placeholder="Nombre de la actividad" value="<?php echo $filaSeleccionada['nombre'];?>">
                    </div>
                    <div class="campo">
                        <label>Descripcion breve: </label>
                        <input class="input-text" type="text" name="descripcion" placeholder="Descripcion de la actividad"  value="<?php echo $filaSeleccionada['descripcion'];?>">
                    </div>
                    <div class="campo">
                        <label>Nivel: </label>
                        <input class="input-text" type="text" name="nivel" placeholder="Escriba el nivel con un numero" value="<?php echo $filaSeleccionada['nivel'];?>">
                    </div>
                    <div class="campo">
                        <label>Identificador de ejercicio: </label>
                        <input class="input-text" type="text" name="actividad" placeholder="Escribe el numero de actividad" value="<?php echo $filaSeleccionada['actividad'];?>">
                    </div>
                    <div class="campo">
                        <label>Link de resultados: </label>
                        <input class="input-text" type="text" name="link" placeholder="Ej. https://wordwall.net/es/result/shareable/a/c6e67db335ce4f879c5cfde9e6de04fb" value="<?php echo $filaSeleccionada['resultados'];?>">
                    </div>
                    <div class="campo">
                        <label>Incrustar Iframe:</label>
                        <textarea class="input-text" name="frame" placeholder="<iframe>Contenido del iframe desde wordwall.net</iframe>"><?php echo $filaSeleccionada['frame'];?></textarea>
                    </div>
                    <div class="campo">
                        <input class="boton w-sm-100" name="editar" type="submit" value="Editar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>