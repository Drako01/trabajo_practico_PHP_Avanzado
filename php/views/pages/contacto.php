<section class="body_contacto">
    <div class="form" id="contacto">
        <div class="section-container">
            <div class="row">
                <form action="#" method="POST" class="formulario" class="col s12">
                    <div class="row card-panel formulario">
                        <div class="input-field col s12"><label for="nombre_c" class="text-form01">Nombre/s:</label>
                            <input type="text" name="nombre_c" id="nombre" class="validate" required>
                        </div>
                        <div class="input-field col s6"><label for="apellido" class="text-form01">Apellido/s:</label>
                            <input type="text" name="apellido_c" id="apellido" class="validate" required>
                        </div>
                        <div class="input-field col s6"><label for="telefono" class="text-form01">Teléfono:</label>
                            <input type="tel" name="telefono_c" id="telefono" class="validate" required>
                        </div>
                        <div class="input-field col s12"><label for="email" class="text-form01">Correo electrónico:</label>
                            <input type="email" name="email_c" id="email" class="validate" required>
                        </div>
                        <div class="input-field col s12">
                            <label for="mesaje" class="text-form01"></label>
                            <textarea class="mensaje-area" placeholder="Mensaje:" name="mensaje_c" id="mensaje" cols="30" rows="30" class="validate" required></textarea>
                        </div>
                    </div>
                    <?php
                    $registro = ControladorContactos::ctrRegistroContactos();
                    ?>
                    <div class="button-field">
                        <input type="reset" value="Borrar" class="boton" />
                        <input type="submit" value="Enviar" class="boton" />
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>
</section>