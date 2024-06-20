<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Doctor</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table style="max-width: 600px; margin: 0 auto; background-color: #fff; border-collapse: collapse; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
        <tr>
            <td style="padding: 20px;">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: center;">
                            <img src="<?php echo e(asset('/images/website/logo.jpg')); ?>" alt="Logo" style="max-width: 150px; margin-bottom: 20px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;">
                            <h1 style="margin-bottom: 20px; color: #333;">Welcome <?php echo e($name); ?></h1>
                            <p style="margin-bottom: 20px; color: #666;">We hope you are well</p>
                            <p style="margin-bottom: 20px; color: #666;">We want to tell you that your request has been confirmed by registering on the MedVesta platform and your reservations can now be recevied</p>
                            <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Visist now</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; background-color: #f9f9f9; text-align: center;">
                <p style="margin-bottom: 10px; color: #666;">Follow us now on social media</p>
                <a href="#" style="margin-right: 5px; color: #007bff; text-decoration: none;">Facebook</a>
                <a href="#" style="margin-right: 5px; color: #007bff; text-decoration: none;">Twitter</a>
                <a href="#" style="margin-right: 5px; color: #007bff; text-decoration: none;">Instagram</a>
            </td>
        </tr>
    </table>

</body>
</html>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/emails/doctor_verify.blade.php ENDPATH**/ ?>