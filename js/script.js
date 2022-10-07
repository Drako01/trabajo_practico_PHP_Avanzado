	$("#email").change(function () {
	$(".alerta").remove();

	let email = $(this).val();
	
	let datos = new FormData();
	datos.append("validarEmail", email);
	

	$.ajax({
		url: "/ajax/formularios.alax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
		if (respuesta) {
			$("#email").val("");

			$("#email").parent().after(`
						
						<div class="alerta alerta-advertencia align-items center border border-danger border-2 opacity-50">

								<strong>ERROR:</strong>

								El correo electrónico ya existe en la base de datos,  por favor ingrese otro diferente
						</div>


					`);
		}
		},
	});
	});
