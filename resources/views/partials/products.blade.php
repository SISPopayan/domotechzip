<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Productos</h2>
                    <h3 class="section-subheading text-muted">Domotech Presenta:</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{!!route('home')!!}/img/portfolio/interruptor.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Interruptor</h4>
                        <p class="text-muted">Control Autonomo de luces</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{!!route('home')!!}/img/portfolio/toma.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tomacorriente</h4>
                        <p class="text-muted">Controla tus Electrodomesticos</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{!!route('home')!!}/img/portfolio/timbre.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Timbre</h4>
                        <p class="text-muted">Vigila tu Hogar Remotamente</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>




    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Interruptor</h2>
                            <p class="item-intro text-muted">Nuestro producto estrella tiene la capacidad de activarse cada vez que alguien se encuentre en el rango de luz de una bombilla eléctrica. r.</p>
                            <img class="img-responsive img-centered" src="{!!route('home')!!}/img/portfolio/interruptor.jpg" alt="">
                            <p>Envía al celular del usuario advertencias en tiempo real de la presencia de individuos que se mueven en el área de luz. </p>
                            <p>
                                <strong>Envía al celular del usuario registros de consumo diario</strong>
                            </p>
                            El interruptor DomoTech puede ser accionado por comandos de movimiento de la mano,  celular, Tablet o pc.
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Continua en Domotech</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>TomaCorriente </h2>
                            <p class="item-intro text-muted">El control total de tus electrodomesticos</p>
                            <img class="img-responsive img-centered" src="{!!route('home')!!}/img/portfolio/toma.jpg" alt="">
                            <p>Nuestro dispositivo permite controlar la presencia o ausencia de energía eléctrica en electrodomésticos conectados. </p>
                            <p>Ycontrolado remotamente por medio de celular, Tablet  o pc.</p>
                            <p>permite guardar registro de consumos eléctricos diarios.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Continua en Domotech</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Timbre</h2>
                            <p class="item-intro text-muted">No mas Sorpresas al Abrir tu puerta</p>
                            <img class="img-responsive img-centered" src="{!!route('home')!!}/img/portfolio/timbre.jpg" alt="">
                            <p>Dispositivo electrónico que funciona por medio de comandos de proximidad</p>

                            <p>Sirve de sensor de presencia para advertir al dueño de casa o empresa que alguien está cerca aunque no accione el dispositivo.</p>
                            <p>Guarda registros en la nube de las acciones ocurridas diariamente.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Continua en Domotech</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    