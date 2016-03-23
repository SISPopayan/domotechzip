<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Contact</h1>
        </div>
    </div>

    <?php echo $__env->make('core-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <?php echo Form::open(['route' => 'contacts.store']); ?>


            <?php echo $__env->make('contacts.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>