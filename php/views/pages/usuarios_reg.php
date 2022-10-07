<?php
if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?ruta=login";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] == "Ok") {
        echo '<script>window.location = "index.php?ruta=inicio";</script>';
        return;
    }
}
$usuarios = ControladorFormularios::ctrSeleccionarRegistro(null, null);
?>
<div class="fondo">
    <h4>Usuarios Registrados</h4>
</div>
<div class="users">
    <div class="usuarios_reg">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <?php foreach ($usuarios as $key => $value) : ?>
                <tbody>
                    <tr>
                        <td><?php echo ($key + 1); ?></td>
                        <td><?php echo $value["nombre"]; ?></td>
                        <td><?php echo $value["email"]; ?></td>
                        <td><?php echo $value["fecha"]; ?></td>
                        <td>
                            <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>"><button class="boton">Editar</button></a>
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                                <button type="submit" class="boton" onclick="return eliminar_cont()">Borrar</button>
                                <?php
                                $eliminar = new ControladorFormularios();
                                $eliminar->ctrEliminarRegistro();
                                ?>
                            </form>
                        </td>
                    <?php endforeach ?>
                    </tr>
                </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    function eliminar_cont() {

        if (confirm('Esta seguro de eliminar el registro?') == true) {
            alert('El registro ha sido eliminado correctamente!');
            return true;
        } else {
            return false;
        }
    }
</script>