<?php if(session('success')): ?>

    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "<?php echo e(session('success')); ?>",
            timeout: 2000,
            killer: true
        }).show();
    </script>

<?php endif; ?>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/partials/_session.blade.php ENDPATH**/ ?>