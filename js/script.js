$("#email").change(function () {
	$(".alerta").remove();

	let email = $(this).val();

	let datos = new FormData();
	datos.append("validarEmail", email);


	$.ajax({
		url: "/ajax/formularios.ajax.php",
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
						
						<div class="alerta alerta-advertencia align-items center">

								<strong>ERROR:</strong>

								El correo electrónico ya existe en la base de datos,  por favor ingrese otro diferente
						</div>


					`);
			}
		},
	});
});

$("#nombre").change(function () {
	$(".alerta").remove();

	let nombre = $(this).val();

	let datos_n = new FormData();
	datos_n.append("validarName", nombre);


	$.ajax({
		url: "/ajax/formularios.ajax.php",
		method: "POST",
		data: datos_n,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			if (respuesta) {
				$("#nombre").val("");

				$("#nombre").parent().after(`
							
							<div class="alerta alerta-advertencia align-items center">
	
									<strong>ERROR:</strong>
	
									Este Usuario ya existe en la base de datos,  por favor ingrese otro diferente
							</div>
	
	
						`);
			}
		},
	});
});