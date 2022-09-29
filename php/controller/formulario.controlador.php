<?php

// Formulario de Usuarios
class ControladorFormularios
{
    static public function ctrRegistro()
    {
        if (isset($_POST["nombre"])) {
            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST["nombre"],
                "email" => $_POST["email"],
                "pass" => $_POST["pass"]
            );

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }

    //Seleccionar Registros
    static public function ctrSeleccionarRegistro($item, $valor)
    {
        $tabla = 'registros';
        $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
        return $respuesta;
    }

    //Ingreso
    public function ctrIngreso()
    {
        if (isset($_POST['ingresoEmail'])) {
            $tabla = 'registros';
            $item = 'email';
            $valor = $_POST['ingresoEmail'];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
            if ($respuesta['email'] == $_POST['ingresoEmail'] && $respuesta['pass'] == $_POST['ingresoPass']) {
                $_SESSION['validarIngreso'] = "Ok";

                echo '<script>
                window.location = "index.php?ruta=inicio";
                </script> ';
            } else {
                echo '                
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text" style="text-align: center; text-shadow: 1px 1px 3px #000;">      
                                <h5>Error al Ingresar al Sistema, el Email o la Contraseña no coinciden.!</h5>
                            </div>        
                        </div>
                    </div>
                </div>                
                ';
            }
        }
    }

    //Actualizar Registro

    static public function ctrActualizarRegistro()
    {
        if (isset($_POST['actualizarNombre'])) {
            if ($_POST['actualizarPassword'] != "") {
                $pass = $_POST['actualizarPassword'];
            } else {
                $pass = $_POST['passwordActual'];
            }
            $tabla = 'registros';
            $datos = array(
                'id' => $_POST['idUsuario'],
                'nombre' => $_POST['actualizarNombre'],
                'email' => $_POST['actualizarEmail'],
                'pass' => md5($pass)
            );
            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

            if ($respuesta) {
                echo '<script>                            
                window.location = "index.php?ruta=usuarios_reg";
                </script> ';
            }
        }
    }

    //Eliminar Registro
    public function ctrEliminarRegistro()
    {
        if (isset($_POST['eliminarRegistro'])) {
            $tabla = 'registros';
            $valor = $_POST['eliminarRegistro'];

            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

            if ($respuesta) {
                echo '<script>                
                window.location = "index.php?ruta=usuarios_reg";
                </script> ';
            }
        }
    }
}


//************************************************************************************************************************************//
// Formulario de Contacto
class ControladorContactos
{
    static public function ctrRegistroContactos()
    {
        if (isset($_POST["nombre_c"])) {
            $tabla_contacto = "clientes";

            $datos_contacto = array(
                "nombre_c" => $_POST["nombre_c"],
                "apellido_c" => $_POST["apellido_c"],
                "telefono_c" => $_POST["telefono_c"],
                "email_c" => $_POST["email_c"],
                "mensaje_c" => $_POST["mensaje_c"]
            );


            $respuesta = ModeloContactos::mdlRegistroContacto($tabla_contacto, $datos_contacto);
            return $respuesta;
        }
    }
}
