<link rel="stylesheet" href="css/login.css">
<main class="contenedor">
    <section>
        <h2>Iniciar sesion</h2>
        <form class="formulario" action="?" method="POST">
            <fieldset>
                <legend>Ingresa tus datos</legend>
                <div class="contenedor__campos">
                    <div class="campo">
                        <label>Nombre de usuario:</label>
                        <input class="input-text" type="text" name="user" placeholder="Ingresa usuario">
                    </div>
                    <div class="campo">
                        <label>Contraseña: </label>
                        <input class="input-text" type="password" name="cont" placeholder="Ingresa contraseña">
                    </div>
                    <div class="campo">
                        <input class="boton w-sm-100" name="ini" type="submit" value="Iniciar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>