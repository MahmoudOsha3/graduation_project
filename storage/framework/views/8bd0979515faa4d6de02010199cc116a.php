        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area doctor_page">
            <div class="container">
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Search about name of doctor ... ">
                <br><br>
                <div class="row">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-6 col-lg-3">
                            <a href="<?php echo e(route('site.doctor-profile' , $doctor->id )); ?>">
                                <div class="single_expert mb-40">
                                    <div class="expert_thumb">
                                        <img src="<?php echo e(asset('images/'."$doctor->image")); ?>" style="height:200px" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3><?php echo e($doctor->name); ?></h3>
                                        <span><?php echo e($doctor->special->name); ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="alert alert-secondary form-control" style="text-align: center" role="alert">
                            No data found
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    
                </div>
            </div>
        </div>
        <!-- expert_doctors_area_end -->
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/livewire/doctor-livewire.blade.php ENDPATH**/ ?>