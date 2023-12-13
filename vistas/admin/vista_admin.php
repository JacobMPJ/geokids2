<link rel="stylesheet" href="css/admin.css">
<main class="contenedor">
    <section>
        <h2>Crear contenido</h2>
        <form method="POST" class="formulario" action="?p=1" autocomplete="off">
            <fieldset>
                <legend>Agrega una nueva actividad</legend>
                <div class="contenedor__campos">
                    <div class="campo">
                        <label>Descripcion breve: </label>
                        <input class="input-text" name="descripcion" type="text" placeholder="Descripcion de la actividad">
                    </div>
                    <div class="campo">
                        <label>Nombre del juego: </label>
                        <input class="input-text" name="nombre" class="cnt-inputs" type="text" placeholder="Nombre de la actividad">
                    </div>
                    <div class="campo">
                        <label>Nivel: </label>
                        <input class="input-text" name="nivel" type="text" placeholder="Escribe el nivel en numero">
                    </div>
                    <div class="campo">
                        <label>Identificador de ejercicio: </label>
                        <input class="input-text" name="actividad" type="text" placeholder="Escribe el numero de actividad">
                    </div>
                    <div class="campo">
                        <label>Link de resultados: </label>
                        <input class="input-text" name="link" type="text" placeholder="Ej. https://wordwall.net/es/result/shareable/a/c6e67db335ce4f879c5cfde9e6de04fb">
                    </div>
                    <div class="campo">
                        <label>Incrustar Iframe:</label>
                        <textarea class="input-text" name="frame" placeholder="<iframe>Contenido del iframe desde wordwall.net</iframe>"></textarea>
                    </div>
                    <div class="campo">
                        <input class="boton w-sm-100" type="submit" name="agregar" value="Agregar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>