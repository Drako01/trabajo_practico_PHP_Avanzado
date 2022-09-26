<section class="login">
    <div class="formulario ">
        <form action="" method="POST" class="" class="col s12" autocomplete="off">
            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <?php
                    echo '<h2>Registrarse</h2>' ?></div><br>
                <div class="input-field col s12"><label for="nombre" class="text-form01">Ingrese su Usuario: </label>
                    <input autocomplete="off" type="text" name="nombre" id="nombre" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese su Email: </label>
                    <input autocomplete="off" type="email" name="email" id="email" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="pass" class="text-form01">Ingrese su Contraseña: </label>
                    <input autocomplete="off" type="password" name="pass" id="pass" class="validate" required>
                </div>

                <?php
                require_once './php/controller/formulario.controlador.php';
                $registro = ControladorFormularios::ctrRegistro();

                ?>

            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Ingresar" class="boton" name="enviar" />
            </div>
        </form>

    </div>
</section>