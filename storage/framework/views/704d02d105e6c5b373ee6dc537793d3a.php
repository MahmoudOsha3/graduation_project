<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.profile'); ?></h1>
    </section>
    <br>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('doctor.dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.profile'); ?></li>
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
    <div class="row">
        <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset('images/'.$doctor->image)); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e($doctor->name); ?></h3>

              <p class="text-muted text-center"><?php echo e($doctor->email); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><?php echo app('translator')->get('site.phone'); ?></b> <a class="pull-right"><?php echo e($doctor->phone); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo app('translator')->get('site.special'); ?></b> <a class="pull-right"><?php echo e($doctor->special->name); ?></a>
                </li>
                <li class="list-group-item">
                    <b><?php echo app('translator')->get('site.clinic'); ?></b> <a class="pull-right"><?php echo e($doctor->clinic->name); ?></a>
                </li>
                <li class="list-group-item">
                    <b><?php echo app('translator')->get('site.price'); ?></b> <a class="pull-right"><?php echo e($doctor->clinic->price); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo app('translator')->get('site.government'); ?></b> <a class="pull-right"><?php echo e($doctor->government->name); ?></a>
                </li>
              </ul>
              <b><?php echo app('translator')->get('site.bio'); ?></b> <a class="pull-right"><?php echo e($doctor->bio); ?></a>
              <br><br><br><br><br><br>
              <a href="#" class="btn btn-primary btn-block"><b><?php echo app('translator')->get('site.edit'); ?></b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        

        
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo app('translator')->get('site.edit_profile'); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="<?php echo e(route('doctor.profile.update' , $doctor->id )); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                  <div class="box-body">

                    <div class="row">

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1"><?php echo app('translator')->get('site.phone'); ?></label>
                              <input type="number" class="form-control" name="phone" value="<?php echo e($doctor->phone); ?>">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1"><?php echo app('translator')->get('site.government'); ?></label>
                            <select name="gov_id" class="form-control" >
                                <?php $__currentLoopData = $governments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $government): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($government->id); ?>" <?php if($doctor->gov_id == $government->id): echo 'selected'; endif; ?>><?php echo e($government->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1"><?php echo app('translator')->get('site.ar.clinic'); ?></label>
                            <input type="text" class="form-control"  name="clinic_name_ar" value="<?php echo e($doctor->clinic->getTranslation('name' , 'ar')); ?>">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1"><?php echo app('translator')->get('site.en.clinic'); ?></label>
                            <input type="text" class="form-control"  name="clinic_name_en" value="<?php echo e($doctor->clinic->getTranslation('name' , 'en')); ?>">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputPassword1">price</label>
                        <input type="text" class="form-control" name="clinic_price" value="<?php echo e($doctor->clinic->price); ?>">
                      </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.ar.bio'); ?></label>
                        <textarea name="bio_ar"  cols="85" rows="2"><?php echo e($doctor->getTranslation('bio' , 'ar')); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.en.bio'); ?></label>
                        <textarea name="bio_en"  cols="85" rows="2"><?php echo e($doctor->getTranslation('bio' , 'en')); ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="image"><?php echo app('translator')->get('site.edit-image'); ?></label>
                      <input type="file" name="image" id="image">
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
    
</section>
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.DashboardDoctor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/doctor/profile/profile.blade.php ENDPATH**/ ?>