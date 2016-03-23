<?php $__env->startSection('content'); ?>


    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a nuestro proyecto</div>
                <div class="intro-heading">Te presentamos una ventana hacia el futuro</div>
                <a href="#services" class="page-scroll btn btn-xl">Conoce mas ventajas</a>
            </div>
        </div>
    </header>

<?php echo $__env->make('partials.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('partials.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
<?php echo $__env->make('partials.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  

    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    -->
    
<?php echo $__env->make('partials.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>