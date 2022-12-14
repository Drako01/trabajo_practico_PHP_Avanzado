<?php

require_once '../php/controller/formulario.controlador.php';
require_once "../php/models/formularios.modelos.php";

class AjaxFormularios{
	
	public $validarEmail;
	public function ajaxValidarEmail(){

		$item = "email";
		$valor = $this->validarEmail;

		$respuesta = ControladorFormularios::ctrSeleccionarRegistro($item, $valor);
		
		echo json_encode($respuesta);
	}
	public $validarName;
	public function ajaxvalidarName(){

		$item = "nombre";
		$valor = $this->validarName;

		$respuesta = ControladorFormularios::ctrSeleccionarRegistro($item, $valor);
		
		echo json_encode($respuesta);
	}

}

if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxFormularios();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxValidarEmail();

}

if(isset($_POST["validarName"])){

	$valName = new AjaxFormularios();
	$valName -> validarName = $_POST["validarName"];
	$valName -> ajaxvalidarName();

}