<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('dashboard_files/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(auth()->user()->name); ?></p> 
                <small><i class="fa fa-circle text-success"></i> Admin</small>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-th"></i> <span><?php echo app('translator')->get('site.dashboard'); ?></span></a></li>
            <li><a href="<?php echo e(route('doctors.index')); ?>"><i class="bi bi-person-heart"></i> <span><?php echo app('translator')->get('site.doctors'); ?></span></a></li>
            <li><a href="<?php echo e(route('clinics.index')); ?>"><i class="bi bi-hospital-fill"></i> <span><?php echo app('translator')->get('site.clinics'); ?></span></a></li>
            <li><a href="<?php echo e(route('specialization.index')); ?>"><i class="bi bi-hourglass-split"></i> <span><?php echo app('translator')->get('site.specialization'); ?></span></a></li>
            <li><a href="<?php echo e(route('government.index')); ?>"><i class="bi bi-bus-front-fill"></i> <span><?php echo app('translator')->get('site.governments'); ?></span></a></li>
            <li><a href="<?php echo e(route('patients.index')); ?>"><i class="fa fa-users"></i> <span><?php echo app('translator')->get('site.patients'); ?></span></a></li>
            <li><a href="<?php echo e(route('requests.index')); ?>"><i class="bi bi-calendar2-date"></i> <span><?php echo app('translator')->get('site.appointments'); ?></span></a></li>
            

            



            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </li>
        </ul>

    </section>



</aside>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/layouts/dashboard/_aside.blade.php ENDPATH**/ ?>