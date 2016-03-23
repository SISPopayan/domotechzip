<?php $__env->startSection('content'); ?>

    <div class="container">

        <h1 class="pull-left">Contacts</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('contacts.create'); ?>">Add New</a>

        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>

        <?php if($contacts->isEmpty()): ?>
            <div class="well text-center">No Contacts found.</div>
        <?php else: ?>
            <?php echo $__env->make('contacts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>