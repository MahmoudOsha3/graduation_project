<?php $__env->startSection('title'); ?> Profile <?php $__env->stopSection(); ?>
<style>


.profile {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width:950px;
    text-align: center;
}

.profile-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

form label {
    margin-bottom: 5px;
    text-align: left;
}

form input, form textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: calc(100% - 22px);
}

form button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
}

form button:hover {
    background-color: #575757;
}
table {
    width:950px;
    text-align: center;
    /* max-width: 800px; */
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    text-align: center
}

th {
    background-color: #333;
    color: #fff;
}

tr:hover {
    background-color: #f4f4f4;
}

.profile-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}
</style>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


<?php $__env->startSection('content'); ?>
<!-- bradcam_area_start  -->
<div class="bradcam_area bradcam_overlay" style="background-image:#">
    <div class="container" style="display: flex">
        
        <div class="row" style="margin-left: 30px;marign-right:30px">
            <div class="col-xl-12">
                <div class="container">
                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <h5><?php echo e(session()->get('success')); ?></h5>
                    </div>
                    <?php endif; ?>
                    <div class="profile">
                        <img src="<?php echo e(asset('images/'."$user->image")); ?>" alt="personal image" class="profile-img">
                        <h2><?php echo e($user->name); ?></h2>
                        <h5><?php echo e($user->email); ?></h5>
                        
                        <form method="POST" action="<?php echo e(route('user-profile-update' , $user->id)); ?>"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <label for="username"><?php echo app('translator')->get('site.name'); ?></label>
                            <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="email"><?php echo app('translator')->get('site.email'); ?></label>
                            <input type="email" name="email" value="<?php echo e($user->email); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="phone"><?php echo app('translator')->get('site.phone'); ?></label>
                            <input type="tel" name="phone" id="phone" value="<?php echo e($user->phone); ?>">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            

                            <label for="password"><?php echo app('translator')->get('site.password'); ?></label>
                            <input type="password" id="password" password="password">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="image"><?php echo app('translator')->get('site.image'); ?></label>
                            <input type="file" id="image" name="image">

                            
                            <button type="submit"><?php echo app('translator')->get('site.update'); ?></button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>




<section class="blog_area single-post-area section-padding"  style="margin-left:120px ">>
    <div class="whole-wrap">
        <div class="container box_1170" >
            <h2 style="color: white"><?php echo app('translator')->get('site.MyAppointments'); ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo app('translator')->get('site.doctor'); ?></th>
                        <th><?php echo app('translator')->get('site.date'); ?></th>
                        <th><?php echo app('translator')->get('site.day'); ?></th>
                        <th><?php echo app('translator')->get('site.time'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $appointments_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset('images/'.$appointment->doctor->image)); ?>" alt="ing" class="profile-img"></td>
                        <td><?php echo e($appointment->doctor->name); ?></td>
                        <td><?php echo e($appointment->date); ?></td>
                        <td><?php echo e($appointment->day); ?></td>
                        <td><?php echo e($appointment->oclock); ?> pm</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>


        </div>
    </div>
</div>

</section>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/website/profile-user/index.blade.php ENDPATH**/ ?>