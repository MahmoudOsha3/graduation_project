<aside class="main-sidebar">

    <section class="sidebar">

        <a href="<?php echo e(route('doctor.profile')); ?>">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(asset('images/'.auth()->user()->image)); ?>" class="img-circle"  alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo e(ucfirst(auth()->user()->name)); ?></p>
                    <small><i class="fa fa-circle text-success"></i> Doctor</small>
                </div>
            </div>
        </a>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="<?php echo e(route('doctor.dashboard')); ?>"><i class="fa fa-th"></i><span><?php echo app('translator')->get('site.dashboard'); ?></span></a></li>
            <li><a href="<?php echo e(route('appointments.index')); ?>"><i class="bi bi-calendar-check"></i> <span><?php echo app('translator')->get('site.MyAppointments'); ?></span></a></li>
            <li><a href="<?php echo e(route('doctor.requests')); ?>"><i class="bi bi-ticket-perforated"></i> <span><?php echo app('translator')->get('site.Requests'); ?></span></a></li>
            <li><a href="<?php echo e(route('doctor.profile')); ?>"><i class="bi bi-person-circle"></i> <span><?php echo app('translator')->get('site.profile'); ?></span></a></li>
            <li><a href="<?php echo e(route('doctor.clinic')); ?>"><i class="bi bi-person-circle"></i> <span><?php echo app('translator')->get('site.clinic'); ?></span></a></li>



            
            </li>
        </ul>

    </section>



</aside>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/layouts/DashboardDoctor/_aside.blade.php ENDPATH**/ ?>