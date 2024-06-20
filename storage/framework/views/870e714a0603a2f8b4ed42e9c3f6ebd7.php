
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
<style>
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    a{
        text-decoration: none ;
        color: black ;
    }

    .container {
    text-align: center;
    }

    .login-box {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-box h2 {
    margin-bottom: 20px;
    }

    .image-grid {
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .image-grid img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-left: 30px;
    margin-right: 30px;

}
</style>
</head>

<body>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <div class="image-grid">
        <a href="<?php echo e(route('website.login')); ?>">
            <img src="<?php echo e(asset('dashboard_files/img/login/iconsUsers.png')); ?>" alt="icon">
            <h3>User</h3>
        </a>

        <a href="<?php echo e(route('doctor.login')); ?>">
            <img src="<?php echo e(asset('dashboard_files/img/login/iconsDoctors.png')); ?>" alt="icon">
            <h3>Doctor</h3>
        </a>

        <a href="<?php echo e(route('admin.login')); ?>">
            <img src="<?php echo e(asset('dashboard_files/img/login/iconAdmin.png')); ?>" alt="icon">
            <h3>Admin</h3>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/welcome.blade.php ENDPATH**/ ?>