<h1>Registrarse</h1>

<main>
    <form action="<?=BASE_DIR;?>Usuario/save" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" required>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" required>
        <label for="contrasenia">Contraseña</label>
        <input type="password" name="password" required>
        <input type="submit" value="Registrar">
    </form>
</main>