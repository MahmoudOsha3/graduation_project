<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.patients'); ?></h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.patients'); ?></li>
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
            <h3 class="box-title" style="margin-bottom: 15px"><?php echo app('translator')->get('site.count-patients'); ?> : <small style="font-size:17px"><?php echo e($patients->count()); ?></small></h3>
            <form action="<?php echo e(route('patients.index')); ?>" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('site.search-about-patient'); ?>" value="<?php echo e(request()->search); ?>">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo app('translator')->get('site.search'); ?></button>
            </form>
<!-- Add patient -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <?php echo app('translator')->get('site.add-patient'); ?>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.add-patient'); ?></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form action="<?php echo e(route('patients.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name"><?php echo app('translator')->get('site.name'); ?></label>
                        <input type="text" name="name" class="form-control" id="name">

                        <label for="email"><?php echo app('translator')->get('site.email'); ?></label>
                        <input type="email" name="email" class="form-control" id="email">

                        <label for="password"><?php echo app('translator')->get('site.password'); ?></label>
                        <input type="password" name="password" class="form-control" id="password"><br>

                        <label for="phone"><?php echo app('translator')->get('site.phone'); ?></label>
                        <input type="tel" name="phone" class="form-control" id="phone">

                        <label for="address"><?php echo app('translator')->get('site.address'); ?></label>
                        <input type="text" name="address" class="form-control" id="address">


                        <label for="phone"><?php echo app('translator')->get('site.government'); ?></label>
                        <select name="gov_id" class="form-control">
                            <option value="<?php echo e(null); ?>" selected>....</option>
                            <?php $__currentLoopData = $governments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $government): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($government->id); ?>"><?php echo e($government->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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

            <?php if($patients->count() > 0): ?>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo app('translator')->get('site.number'); ?></th>
                        <th><?php echo app('translator')->get('site.name'); ?></th>
                        <th><?php echo app('translator')->get('site.email'); ?></th>
                        <th><?php echo app('translator')->get('site.phone'); ?></th>
                        <th><?php echo app('translator')->get('site.government'); ?></th>
                        <th><?php echo app('translator')->get('site.address'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++ $index); ?></td>
                            <td><?php echo e($patient->name); ?></td>
                            <td><?php echo e($patient->email); ?></td>
                            <td><?php echo e($patient->phone); ?></td>
                            <td><?php echo e($patient->governmnet->name); ?></td>
                            <td><?php echo e($patient->address); ?></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?php echo e($patient->id); ?>">
                                    <i class="fa fa-edit"></i> <?php echo app('translator')->get('site.edit'); ?>
                                </button>

                                <form action="<?php echo e(route('patients.destroy' , $patient->id)); ?>" method="post" style="display: inline-block">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('delete')); ?>

                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> <?php echo app('translator')->get('site.delete'); ?></button>
                                </form>
                            </td>

                        <!-- edit Modal -->
                        <div class="modal fade" id="edit<?php echo e($patient->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalCenterTitle"><?php echo app('translator')->get('site.edit-patient'); ?></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="<?php echo e(route('patients.update' , $patient->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name_ar"><?php echo app('translator')->get('site.name'); ?></label>
                                                <input type="text" value="<?php echo e($patient->name); ?>" name="name" class="form-control" id="name_ar"><br>
                                                <label for="email"><?php echo app('translator')->get('site.email'); ?></label>
                                                <input type="email" value="<?php echo e($patient->email); ?>"  name="email" class="form-control" id="email">
                                                <label for="password"><?php echo app('translator')->get('site.password'); ?></label>
                                                <input type="password" name="password" class="form-control" id="password"><br>

                                                <label for="phone"><?php echo app('translator')->get('site.phone'); ?></label>
                                                <input type="tel" name="phone" value="<?php echo e($patient->phone); ?>" class="form-control" id="phone">

                                                <label for="address"><?php echo app('translator')->get('site.address'); ?></label>
                                                <input type="tel" name="address" value="<?php echo e($patient->address); ?>" class="form-control" id="address">

                                                <label for="phone"><?php echo app('translator')->get('site.government'); ?></label>
                                                <select name="gov_id" class="form-control">
                                                    <option value="<?php echo e(null); ?>" selected>....</option>
                                                    <?php $__currentLoopData = $governments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $government): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($government->id); ?>" <?php if($patient->governmnet->id == $government->id): echo 'selected'; endif; ?>><?php echo e($government->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
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

<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/patients/index.blade.php ENDPATH**/ ?>