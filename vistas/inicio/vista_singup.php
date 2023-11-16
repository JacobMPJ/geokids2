<link rel="stylesheet" href="css/singup.css">
<main class="contenedor">
    <section>
        <h2>Registrate</h2>
        <form class="formulario" action="index.php?p=4" method="POST">
            <fieldset>
                <legend>Llena todos los datos</legend>
                <div class="contenedor__campos">
                    <div class="campo">
                        <label>Nombre Completo:</label>
                        <input class="input-text" name="nombre" class="cnt-inputs" type="text" placeholder="Escribe tu nombre(s)">
                    </div>
                    <div class="campo">
                        <label>Usuario: </label>
                        <input class="input-text" name="usuario" type="text" placeholder="Crea un nombre de usuario">
                    </div>
                    <div class="campo">
                        <label>Contraseña: </label>
                        <input class="input-text" name="pass" type="password" placeholder="Crea una contraseña">
                    </div>
                    <div class="campo">
                        <label>Confirma Contraseña: </label>
                        <input class="input-text" name="confirm" type="password" placeholder="Confirma tu contraseña">
                    </div>
                    <div class="campo">
                        <input class="boton w-sm-100" name="registrar" type="submit" value="Registrar">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>