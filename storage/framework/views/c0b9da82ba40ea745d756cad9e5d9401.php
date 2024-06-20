



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard_files/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard_files/css/AdminLTE.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard_files/plugins/icheck/square/blue.css')); ?>">

</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 700px">
    <!-- Success Alert -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
  <div class="login-logo">
    <a href="#"><b>Med</b>Vista</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up new an account user</p>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo e(route('register.patient')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

              <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputPassword1"><?php echo app('translator')->get('site.name'); ?></label>
                      <input type="text" class="form-control"  name="name">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1"><?php echo app('translator')->get('site.email'); ?></label>
                      <input type="email" class="form-control"  name="email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1"><?php echo app('translator')->get('site.password'); ?></label>
                      <input type="password" class="form-control"  name="password">
                    </div>



                  <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo app('translator')->get('site.phone'); ?></label>
                    <input type="number" class="form-control"  name="phone">

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo app('translator')->get('site.address'); ?></label>
                    <input type="text" class="form-control"  name="address">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo app('translator')->get('site.government'); ?></label>
                    <select name="gov_id" class="form-control">
                        <?php $__currentLoopData = $governments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governemnt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($governemnt->id); ?>"><?php echo e($governemnt->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <h5><a href="<?php echo e(route('website.login')); ?>">Login now</a></h5>
          </div>
    </div>

</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo e(asset('dashboard_files/plugins/jQuery/jQuery-2.2.0.min.js')); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('dashboard_files/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('dashboard_files/plugins/icheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>



<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/website/auth/register.blade.php ENDPATH**/ ?>