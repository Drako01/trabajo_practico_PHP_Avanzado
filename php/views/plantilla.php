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
                    <li><a href="index.php?ruta=registros">Registros</a> </li>
                    <li><a href="index.php?ruta=ingreso">Ingreso</a> </li>
                    <li><a href="index.php?ruta=inicio">Inicio</a> </li>
                    <li><a href="index.php?ruta=salir">Salir</a> </li>
                </ul>
            </nav>
            <div id="marca">
                <h2>Login</h2>
            </div>
        </header>
        <section id="contenido">
            <?php
            if(isset($_GET['ruta'])){
                if(
                    $_GET['ruta']=='registros' ||
                    $_GET['ruta']=='ingreso' ||
                    $_GET['ruta']=='inicio' ||
                    $_GET['ruta']=='salir'
                ){
                    include 'pages/'.$_GET['ruta']. '.php' ;
                }else{
                    include 'pages/error404.php';
                }
                
                
            }else{
                include 'pages/registros.php';
            }
            ?>
        </section>
    </div>
    
<footer>
    <p>&COPY; Alejandro Di Stefano - Nivel Avanzado de PHP y MySQL</p>
</footer>
</body>
</html>