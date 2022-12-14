<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo en PHP - Avanzado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php?ruta=inicio">Inicio</a> </li>
                    <li><a href="index.php?ruta=fotos">Nuestras Pizzas</a> </li>
                    <li><a href="index.php?ruta=acerca_de">Acerca de</a> </li>
                    <li><a href="index.php?ruta=ubicacion">Donde Estamos?</a> </li>
                    <li><a href="index.php?ruta=contacto">Contacto</a> </li>

                    <?php
                    if (!isset($_SESSION["validarIngreso"])) { ?>
                        <li><a href="index.php?ruta=registro">Registro</a> </li>
                        <li><a href="index.php?ruta=login">Iniciar Sessión</a> </li>
                    <?php
                    } else { ?>
                        <li><a href="index.php?ruta=usuarios_reg">Usuarios</a></li>
                        <li><a href="index.php?ruta=salir">Salir</a></li>
                    <?php } ?>
                    
                </ul>
            </nav>
            <div class="fondo_usr">
                <?php

                ?>
            </div>
        </header>
        <section id="contenido">
            <?php
            if (isset($_GET['ruta'])) {
                if (
                    $_GET['ruta'] == 'acerca_de' ||
                    $_GET['ruta'] == 'fotos' ||
                    $_GET['ruta'] == 'inicio' ||
                    $_GET['ruta'] == 'ubicacion' ||
                    $_GET['ruta'] == 'contacto' ||
                    $_GET['ruta'] == 'registro' ||
                    $_GET['ruta'] == 'editar' ||
                    $_GET['ruta'] == 'usuarios_reg' ||
                    $_GET['ruta'] == 'login' ||
                    $_GET['ruta'] ==  'salir'
                ) {
                    include 'pages/' . $_GET['ruta'] . '.php';
                } else {
                    include 'pages/error404.php';
                }
            } else {
                include 'pages/inicio.php';
            }
            ?>
        </section>
    </div>

    <footer>
        <p>&COPY; Alejandro Di Stefano - Nivel Avanzado de PHP y MySQL</p>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
<?php

$usuarios = ControladorFormularios::ctrSeleccionarRegistro(null, null);
