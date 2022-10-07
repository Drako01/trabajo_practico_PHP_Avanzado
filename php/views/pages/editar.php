<?php
if (isset($_GET["id"])) {
	$item = "id";
	$valor = $_GET["id"];
	$usuario = ControladorFormularios::ctrSeleccionarRegistro($item, $valor);
}

?>
<div class="usuarios_reg editar">

	<form method="post">

		<input type="text" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
		<input type="email" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
		<input type="password"  id="pwd" name="actualizarPassword" placeholder="Actualizar Password?" >
		<input type="hidden" name="passwordActual" value="<?php echo $usuario["pass"]; ?>">
		<input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
		
		<?php

		$actualizar = ControladorFormularios::ctrActualizarRegistro();

		if ($actualizar == "ok") {

			echo '<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}

			</script>';
			echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
			<script>

				setTimeout(function(){				
					window.location = "index.php?pagina=inicio";
				},3000);
			</script>
			';
		}

		?>
		<div class="button-field">
			<input type="reset" value="Reset" class="boton" />
			<input type="submit" value="Actualizar" class="boton" />
		</div>


	</form>

</div>