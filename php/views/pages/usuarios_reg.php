<?php
if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?ruta=login";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] == "ok") {
        echo '<script>window.location = "index.php?ruta=inicio";</script>';
        return;
    }
}
$usuarios = ControladorFormularios::ctrSeleccionarRegistro(null, null);
?>
<div class="fondo">
    <h2>Usuarios Registrados</h2>
</div>
<div class="users">
    <?php foreach ($usuarios as $key => $value) : ?>
        <div class="usuarios_reg">
            <tr>
                <div>
                    <td>Id: <?php echo ($key + 1); ?></td>
                    <td>Nombre: <?php echo $value["nombre"]; ?></td>
                    <td>Email: <?php echo $value["email"]; ?></td>
                    <td>Fecha: <?php echo $value["fecha"]; ?></td>
                </div>
                <div>
                    <td>
                        <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>"><button class="boton">Editar</button></a>
                    </td>
                </div>
                <div>
                    <td>
                        <form method="post">
                            <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                            <button type="submit" class="boton">Borrar</button>
                            <?php
                            $eliminar = new ControladorFormularios();
                            $eliminar->ctrEliminarRegistro();
                            ?>
                        </form>
                    </td>
                </div>

            </tr>
        </div>
    <?php endforeach ?>
</div>