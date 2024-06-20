<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.requests'); ?></h1>
    </section>
    <br>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('doctor.dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.requests'); ?></li>
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
            <h3 class="box-title" style="margin-bottom: 15px"><?php echo app('translator')->get('site.count-requests'); ?> : <small style="font-size:17px"><?php echo e($requests->count()); ?></small></h3>
            <form action="<?php echo e(route('requests.index')); ?>" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('site.search-about-request'); ?>" value="<?php echo e(request()->search); ?>">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo app('translator')->get('site.search'); ?></button>
            </form>

        </div>
    </div>

        </div><!-- end of box header -->

        <div class="box-body">

            <?php if($requests->count() > 0): ?>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo app('translator')->get('site.number'); ?></th>
                        <th><?php echo app('translator')->get('site.name'); ?></th>
                        <th><?php echo app('translator')->get('site.phone-patient'); ?></th>
                        <th><?php echo app('translator')->get('site.email'); ?></th>
                        <th><?php echo app('translator')->get('site.day'); ?></th>
                        <th><?php echo app('translator')->get('site.date'); ?></th>
                        <th><?php echo app('translator')->get('site.oclock'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++ $index); ?></td>
                            <td><?php echo e($request->patient->name); ?></td>
                            <td><?php echo e($request->patient->phone); ?></td>
                            <td><?php echo e($request->patient->email); ?></td>
                            <td><?php echo e($request->day); ?></td>
                            <td><?php echo e($request->date); ?></td>
                            <td><?php echo e($request->oclock); ?> pm</td>
                            <td>
                                <a href="<?php echo e(route('requests.show' , $request->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> <?php echo app('translator')->get('site.report'); ?></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                
            <?php else: ?>
                <h2><?php echo app('translator')->get('site.no_data_found'); ?></h2>
            <?php endif; ?>

        </div><!-- end of box body -->


    </div><!-- end of box -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.DashboardDoctor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/doctor/MyRequests/index.blade.php ENDPATH**/ ?>