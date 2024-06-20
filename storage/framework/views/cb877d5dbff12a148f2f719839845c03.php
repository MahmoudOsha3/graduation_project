<?php $__env->startSection('title'); ?> Departments <?php $__env->stopSection(); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


<?php $__env->startSection('content'); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('doctor-within-departments', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-947544910-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/website/department/index.blade.php ENDPATH**/ ?>