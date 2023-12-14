<section>

        <div class="contenedorTarjetas">
            <div class="tarjeta_tickets tarjeta_tickets_estudiante ">
               <h3 class="animate__animated animate__pulse animate__delay-1s "><b> Estudiante</b></h3>
                <p class="parrafo_tarjeta ">Tienen un descuento</p>
                <h3>80%</h3>
                <p class="presentar_doc">*presentar documentación</p>
            </div>

            <div class="tarjeta_tickets tarjeta_tickets_trainee">
                <h3 class="animate__animated animate__pulse animate__delay-2s "><b>Trainee</b></h3>
                <p class="parrafo_tarjeta">Tienen un descuento</p>
                <h3>50%</h3>
                <p class="presentar_doc">*presentar documentación</p>
            </div>
            <div class="tarjeta_tickets tarjeta_tickets_junior">
                <h3 class="animate__animated animate__pulse animate__delay-3s "><b>Junior</b></h3>
                <p class="parrafo_tarjeta">Tienen un descuento</p>
                <h3>15%</h3>
                <p class="presentar_doc">*presentar documentación</p>
            </div>
        </div>
    </section>

    <section class="venta_valor_ticket_contenedor">

        <span>Venta</span>
        <h2>Valor de Ticket $200 </h2>


        <form action="" method="">

            <div class="contenedor_label">
                <div class="label">
                    <label class="form-label" for="nombre">Nombre</label>
                    <div class="casilleros">
                        <input class="form-control " id="nombre" style="width:350px; height:30px" type="text"
                            name="nombre" placeholder="nombre" required>
                        <div id="mje_error_nombre" class="invalid-feedback ">
                            <p>Ingrese su nombre</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="label">
                        <label class="form-label" for="apellido">Apellido</label>
                        <div class="casilleros"></div>
                        <input class="form-control" id="apellido" style="width:350px; height:30px" type="text"
                            name="apellido" placeholder="apellido" required>
                        <div id="mje_error_apellido" class="invalid-feedback ">
                            <p>Ingrese su apellido</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_label">
                <div class="label">
                    <label for="correo">Correo</label>
                    <div class="casilleros"></div>
                    <input class="form-control" id="correo" style="width:700px; height:30px" type="email" name="correo"
                        placeholder="correo" required>
                    <div id="mje_error_correo" class="invalid-feedback ">
                        <p>Ingrese su correo </p>

                    </div>

                </div>

            </div>

            <div class="contenedor_label">
                <div class="label">
                    <label for="cantidad">Cantidad</label>
                    <div class="casilleros">
                        <input class="form-control" id="cantidad" style="width:350px; height:30px" type="number"
                            name="cantidad" placeholder="cantidad" min="1"required > 
                        <div id="mje_error_cantidad" class="invalid-feedback ">
                            <p>Ingrese la cantidad de tickets</p>
                        </div>
                    </div>
                </div>


                <div class="label">
                    <label for="categoria">Categoria</label>
                    <div class="casilleros">
                        <select class=" selector form-select" id="categoria" style="width:350px; " required>

                            <option value="0">Sin categoria</option>
                            <option value="1">Estudiante</option>
                            <option value="2">Trainee</option>
                            <option value="3">Junior</option>
                        </select>

                        <div id="mje_error_categoria" class="invalid-feedback ">
                            <p>Ingrese la categoria</p>
                        </div>
                    </div>
                </div>

            </div>
           

            <div class="contenedor_total_pagar"></div>
            <div class="total_pagar" >
                <p >Total a Pagar: $<b><span id="pago"></span></b></p>
                

            </div>
            <div class="botones">
                <input class="aplicar" type="reset" value="Borrar" id="btn_borrar">
                <input class="aplicar" type="submit" onclick="resumen()" value="Resumen" id="btn_resumen">
            </div>
            </div>






        </form>

    </section>

    <footer class="contenedor__footer">
        <nav class="nav__footer">
            <a href="">Preguntas Frecuentes</a>
            <a href="">Contáctanos</a>
            <a href="">Prensa</a>
            <a href="">Conferencias</a>
            <a href="">Términos y Condiciones</a>
            <a href="">Privacidad</a>
            <a href="">Estudiantes</a>
        </nav>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../JS/venta_tickets.js"></script>
</body>
</body>

</html>