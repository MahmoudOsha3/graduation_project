<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.clinics'); ?></h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.clinics'); ?></li>
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
            <h3 class="box-title" style="margin-bottom: 15px"><?php echo app('translator')->get('site.count-clinics'); ?> : <small style="font-size:17px"><?php echo e($clinics->count()); ?></small></h3>
            <form action="<?php echo e(route('clinics.index')); ?>" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('site.search-about-clinic'); ?>" value="<?php echo e(request()->search); ?>">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo app('translator')->get('site.search'); ?></button>
            </form>
<!-- Add clinic -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <?php echo app('translator')->get('site.add-clinic'); ?>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.add-clinic'); ?></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form action="<?php echo e(route('doctor.clinic.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name_ar"><?php echo app('translator')->get('site.ar.name'); ?></label>
                        <input type="text" name="name_ar" class="form-control" id="name_ar"><br>
                        <label for="name_en"><?php echo app('translator')->get('site.en.name'); ?></label>
                        <input type="text" name="name_en" class="form-control" id="name_en">
                        <label for="address"><?php echo app('translator')->get('site.address'); ?></label>
                        <input type="text" name="address" class="form-control" id="address">
                        <label for="price"><?php echo app('translator')->get('site.price'); ?></label>
                        <input type="number" name="price" class="form-control" id="price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('site.close'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('site.confirm'); ?></button>
                </div>
            </form>
        </div>
    </div>
  </div>
                    </div>
                </div>

        </div><!-- end of box header -->

        <div class="box-body">

            <?php if($clinics->count() > 0): ?>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo app('translator')->get('site.number'); ?></th>
                        <th><?php echo app('translator')->get('site.clinic'); ?></th>
                        <th><?php echo app('translator')->get('site.address'); ?></th>
                        <th><?php echo app('translator')->get('site.price'); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++ $index); ?></td>
                            <td><?php echo e($clinic->name); ?></td>
                            <?php if($clinic->address): ?>
                                <td><?php echo e($clinic->address); ?></td>
                            <?php else: ?>
                                <td>Null</td>
                            <?php endif; ?>
                            <td><?php echo e($clinic->price); ?> EG</td>
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

<?php echo $__env->make('layouts.DashboardDoctor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/doctor/clinic/clinic.blade.php ENDPATH**/ ?>