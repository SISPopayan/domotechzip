  <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Solicita tu Dispositivo</h2>
                    <h3 class="section-subheading text-muted">Estamos en preventa. Contáctanos ya y obtén grandes sorpresas con tu compra.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo Form::open(['route' => 'contacts.store','id'=>'contactForm']); ?>


                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NOmbre Completo *" name="fullName" id="name" required data-validation-required-message="por Favor  ingresa tú Nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="correo@electronico.com *" name="email" id="email" required data-validation-required-message="por Favor  ingresa tú Email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="+12 3456 789 *" id="phone" name="phone" required data-validation-required-message="por Favor  ingresa tú your Teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Me gustaria adquirir...  *" id="message" name="message" required data-validation-required-message="Dejanos tú mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </section>