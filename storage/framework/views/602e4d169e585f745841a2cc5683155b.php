<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
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
  <div class="login-logo">
    <a href="#"><b>Med</b>Vista</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up new an account</p>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="#" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                
              <div class="box-body">

                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.ar.name'); ?></label>
                        <input type="text" class="form-control"  name="name_ar">
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.en.name'); ?></label>
                        <input type="text" class="form-control"  name="name_en">
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                  </div>


                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.phone'); ?></label>
                          <input type="number" class="form-control" name="phone">
                    </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.government'); ?></label>
                        <select name="gov_id" class="form-control" >
                            
                        </select>
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                  </div>


                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.nid'); ?></label>
                        <input type="number" class="form-control"  name="nid">
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo app('translator')->get('site.special'); ?></label>
                        <select name="gov_id" class="form-control" >
                            
                        </select>
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo app('translator')->get('site.ar.bio'); ?></label>
                    <textarea name="bio_ar"  cols="85" rows="2">BIO</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo app('translator')->get('site.en.bio'); ?></label>
                    <textarea name="bio_en"  cols="85" rows="2">BIO ENGLISH</textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="image"><?php echo app('translator')->get('site.personal-image'); ?></label>
                            <input type="file" name="image" id="image">
                          </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="verify-image"><?php echo app('translator')->get('site.verify-image'); ?></label>
                            <input type="file" name="verify-image" id="verify-image">
                          </div>
                    </div>
                    <!-- /.col-lg-6 -->
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
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/admin/testLogin.blade.php ENDPATH**/ ?>