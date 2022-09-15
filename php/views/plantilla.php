<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo en PHP - Avanzado</title>
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="index.php?ruta=login">Iniciar Sessión</a> </li>
                </ul>
            </nav>

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
                    $_GET['ruta'] == 'login'
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
</body>

</html>