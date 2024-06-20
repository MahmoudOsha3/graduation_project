    <div>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Departments</h3>
                        <p><a href="index.html">Home /</a> Departments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->



    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Our Departments</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. <br>
                            It esteems luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $specialization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        
                        <div class="department_content">
                            <h3><a wire:click.prevent="loadDoctors(<?php echo e($special->id); ?>)">
                                <?php echo e($special->name); ?>

                            </a></h3>

                            
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <!-- offers_area_end -->
        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area doctor_page" >
            <div class="container">
                <!--[if BLOCK]><![endif]--><?php if($nameSpecialization): ?>
                    <h2 style="font-weight:bold ; text-align:center">Department : <?php echo e($nameSpecialization); ?></h2><br>
                <?php else: ?>
                    <div class="alert alert-info">
                        <h4>you must select a specialty to view doctors</h4>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <div class="row">
                    <div wire:loading wire:target="loadDoctors">
                        <h2 style="text-align: center">Loading ...</h2>
                    </div>
                    <!--[if BLOCK]><![endif]--><?php if($doctors !== null): ?>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-lg-3">
                                <a href="<?php echo e(route('site.doctor-profile' , $doctor->id)); ?>">
                                    <div class="single_expert mb-40">
                                        <div class="expert_thumb">
                                            <img src="<?php echo e(asset('images/'."$doctor->image")); ?>" alt="" style="height:250px">
                                        </div>
                                        <div class="experts_name text-center">
                                            <h3><?php echo e($doctor->name); ?></h3>
                                            <span><?php echo e($doctor->special->name); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <!--[if BLOCK]><![endif]--><?php if($nameSpecialization): ?>
                            <div class="alert alert-info">
                                <h4>There are no doctors in this specialty to display</h4>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                </div>
            </div>
        </div>
        <!-- expert_doctors_area_end -->
    </div>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/livewire/doctor-within-departments.blade.php ENDPATH**/ ?>