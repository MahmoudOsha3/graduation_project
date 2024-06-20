<?php $__env->startSection('title'); ?> Doctors <?php $__env->stopSection(); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


<?php $__env->startSection('content'); ?>
        <!-- bradcam_area_start  -->
        <div class="bradcam_area breadcam_bg_2 bradcam_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Doctors</h3>
                            <p><a href="index.html">Home /</a> Doctors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end  -->

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('doctor-livewire', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3389954580-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        


        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/website/doctors/index.blade.php ENDPATH**/ ?>