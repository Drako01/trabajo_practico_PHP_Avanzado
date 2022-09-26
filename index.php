<?php
// Manejo de Errores----------------------------

ini_set('display_errors', 1);
ini_set('display_startup',1);

error_reporting(E_ALL);
require_once('./php/error_mannager.php');

// --------------------------------------------

require_once './php/controller/plantilla.controlador.php';
require_once './php/controller/formulario.controlador.php';
require_once "./php/models/formularios.modelos.php";


$plantilla = new ControladorPlantilla();

$plantilla ->ctrGetPlantilla();