<section class="login">
    <div class="formulario ">
        <form action="" method="POST" class="" class="col s12" autocomplete="off">
            <div class="row card-panel panel-body">
                <div class="nombre titulo_prod">
                    <?php
                    echo '<h2>Iniciar Sesión</h2>' ?></div><br>                
                <div class="input-field col s12"><label for="email" class="text-form01">Ingrese su Email: </label>
                    <input autocomplete="off" type="email" name="ingresoEmail" id="ingresoEmail" class="validate" required>
                </div>
                <div class="input-field col s12"><label for="pass" class="text-form01">Ingrese su Contraseña: </label>
                    <input autocomplete="off" type="password" name="ingresoPass" id="ingresoPass" class="validate" required>
                </div>

                <?php                
                $ingreso = new ControladorFormularios();
                $ingreso -> ctrIngreso();
                ?>

            </div>
            <div class="button-field">
                <input type="reset" value="Borrar" class="boton" />
                <input type="submit" value="Ingresar" class="boton" name="enviar" />
            </div>
        </form>

    </div>
</section>