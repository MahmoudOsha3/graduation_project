<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.appointment-report'); ?></h1>
    </section><br>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.appointment-report'); ?></li>
    </ol>
</section>

    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e($error); ?>

      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <ul class="list-group">

                <li class="list-group-item active"><?php echo app('translator')->get('site.appointment-report'); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.name'); ?></span> : <a href="#"><?php echo e($appointment->patient->name); ?></a></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.email'); ?> : </span><?php echo e($appointment->patient->email); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.phone-patient'); ?> : </span><?php echo e($appointment->patient->phone); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.doctor'); ?> : </span><?php echo e($appointment->doctor->name); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.clinic'); ?> : </span><?php echo e($appointment->doctor->clinic->name); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.date'); ?>  :  </span><?php echo e($appointment->date); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.oclock'); ?> : </span> <?php echo e($appointment->oclock); ?></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)"><?php echo app('translator')->get('site.price'); ?> :  </span><?php echo e($appointment->doctor->clinic->price); ?> EG</li>
              </ul>
        </div>
    </div>

        </div><!-- end of box header -->

        <div class="box-body">


        </div><!-- end of box body -->


    </div><!-- end of box -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/appointment/show.blade.php ENDPATH**/ ?>