<link rel="stylesheet" href="css/micuenta.css">
<main class="contenedor">
    <section>
        <h2>Mi cuenta</h2>
        <form class="formulario" action="index.php?p=2" method="POST" autocomplete="off">
            <fieldset>
                <legend>Modifica tus datos</legend>
                <div class="contenedor__campos">
                    <div class="campo">
                        <label>Nombre:</label> <!--Nombre-->
                        <input class="input-text" name="nombre" type="text" value="<?php echo $_SESSION['nombre']; ?>" disabled>
                    </div>
                    <div class="campo">
                        <label>Nuevo Usuario: </label><!--Usuario-->
                        <input class="input-text" name="user" type="text" placeholder="Nombre de Usuario" value="<?php echo $_SESSION['usr']; ?>" >
                    </div>
                    <div class="campo">
                        <label>Nueva Contraseña: </label> <!--Contraseña-->
                        <input class="input-text" name="npass" type="password" placeholder="Crea una contraseña">
                    </div>
                    <div class="campo">
                        <label>Confirma Contraseña: </label><!--Contraseña nueva-->
                        <input class="input-text" name="cnpass" type="password" placeholder="Confirma tu contraseña">
                    </div>
                    <div></div>
                    <div class="campo">
                        <input class="boton w-sm-100" name="guardar" type="submit" value="Guardar">
                    </div>
                </div>
                <div class="contenedor__boton">
                    <input class="boton w-sm-100" name="logout" type="submit" value="Cerrar Sesion">
                </div>
            </fieldset>
        </form>
    </section>
</main>