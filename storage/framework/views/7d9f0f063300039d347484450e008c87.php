<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.doctors'); ?></h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <?php echo app('translator')->get('site.dashboard'); ?></a></li>
        <li><a href="<?php echo e(route('doctors.index')); ?>"><?php echo app('translator')->get('site.doctors'); ?></a></li>
        <li class="active"><?php echo app('translator')->get('site.add-doctor'); ?></li>
    </ol>

    <div class="box box-primary">
        <div class="box-header">

        </div>
        <div class="box-body">

            <?php echo $__env->make('partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('doctors.store')); ?>" method="Post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="name_ar"><?php echo app('translator')->get('site.ar.name'); ?></label>
                    <input type="text" name="name_ar" id="name_ar"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name_en"><?php echo app('translator')->get('site.en.name'); ?></label>
                    <input type="text" name="name_en" id="name_en" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email"><?php echo app('translator')->get('site.email'); ?></label>
                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password"><?php echo app('translator')->get('site.password'); ?></label>
                    <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone"><?php echo app('translator')->get('site.phone'); ?></label>
                    <input type="tel" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nid"><?php echo app('translator')->get('site.nid'); ?></label>
                    <input type="number" name="nid" id="nid" value="<?php echo e(old('phone')); ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image"><?php echo app('translator')->get('site.image'); ?></label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="img_verify"><?php echo app('translator')->get('site.img_doctor_verify'); ?></label>
                    <input type="file" name="img_verify" id="img_verify" class="form-control">
                </div>

                <div class="form-group">
                    <label for="bio"><?php echo app('translator')->get('site.ar.bio'); ?></label> 
                    <textarea  name="bio_ar" id="bio" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="bio"><?php echo app('translator')->get('site.en.bio'); ?></label> 
                    <textarea  name="bio_en" id="bio" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="government"><?php echo app('translator')->get('site.government'); ?></label>
                    <select name="government_id" id="government" class="form-control">
                        <option value="<?php echo e(null); ?>" disabled>...</option>
                        <?php $__currentLoopData = $governments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $government): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($government->id); ?>"><?php echo e($government->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="special"><?php echo app('translator')->get('site.specialization'); ?></label>
                    <select name="special_id" id="special" class="form-control">
                        <option value="<?php echo e(null); ?>" disabled>...</option>
                        <?php $__currentLoopData = $specialization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($special->id); ?>"><?php echo e($special->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('site.confirm'); ?></button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/doctors/create.blade.php ENDPATH**/ ?>