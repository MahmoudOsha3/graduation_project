<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.MyAppointments'); ?></h1>
    </section>
    <br>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.MyAppointments'); ?></li>
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
            <h3 class="box-title" style="margin-bottom: 15px"><?php echo app('translator')->get('site.count-appointments'); ?> : <small style="font-size:17px"><?php echo e($appointments->count()); ?></small></h3>
            <form action="<?php echo e(route('appointments.index')); ?>" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('site.search-about-appointment'); ?>" value="<?php echo e(request()->search); ?>">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo app('translator')->get('site.search'); ?></button>
            </form>
<!-- Add appointment -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <?php echo app('translator')->get('site.add-appointment'); ?>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.add-appointment'); ?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="<?php echo e(route('appointments.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="days"><?php echo app('translator')->get('site.day'); ?></label><br>
                        <select name="days" id="days" class="form-control">
                            <option value="<?php echo e(null); ?>" disabled selected>...</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        <label for="start_at"><?php echo app('translator')->get('site.Start_at'); ?></label>
                        <input type="number"  name="Start_at" class="form-control" id="start_at">
                        <label for="End_at"><?php echo app('translator')->get('site.End_at'); ?></label>
                        <input type="number" name="End_at"  class="form-control" id="End_at"><br>
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

            <?php if($appointments->count() > 0): ?>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo app('translator')->get('site.number'); ?></th>
                        <th><?php echo app('translator')->get('site.days'); ?></th>
                        <th><?php echo app('translator')->get('site.Start_at'); ?></th>
                        <th><?php echo app('translator')->get('site.End_at'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++ $index); ?></td>
                            <td><?php echo e($appointment->days); ?></td>
                            <td><?php echo e($appointment->Start_at); ?> pm</td>
                            <td><?php echo e($appointment->End_at); ?> pm</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?php echo e($appointment->id); ?>">
                                    <i class="fa fa-edit"></i> <?php echo app('translator')->get('site.edit'); ?>
                                </button>

                                <form action="<?php echo e(route('appointments.destroy' , $appointment->id)); ?>" method="post" style="display: inline-block">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('delete')); ?>

                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> <?php echo app('translator')->get('site.delete'); ?></button>
                                </form>
                            </td>

                        <!-- edit Modal -->
                        <div class="modal fade" id="edit<?php echo e($appointment->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalCenterTitle"><?php echo app('translator')->get('site.edit-appointment'); ?></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="<?php echo e(route('appointments.update' , $appointment->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="days"><?php echo app('translator')->get('site.day'); ?></label><br>
                                                <select name="days" id="days" class="form-control">
                                                        <option value="<?php echo e(null); ?>" disabled selected>...</option>
                                                    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($day); ?>"><?php echo e($day); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <label for="number"><?php echo app('translator')->get('site.Start_at'); ?></label>
                                                <input type="number" value="<?php echo e($appointment->Start_at); ?>"  name="Start_at" class="form-control" id="number">
                                                <label for="End_at"><?php echo app('translator')->get('site.End_at'); ?></label>
                                                <input type="number" name="End_at" value="<?php echo e($appointment->End_at); ?>" class="form-control" id="End_at"><br>
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

<?php echo $__env->make('layouts.DashboardDoctor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/doctor/MyAppointment/index.blade.php ENDPATH**/ ?>