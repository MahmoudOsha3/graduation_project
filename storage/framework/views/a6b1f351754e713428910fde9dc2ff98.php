<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo app('translator')->get('site.dashboard'); ?></h1>
    </section>


    <section class="content">

        <div class="row">

            
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>1800 EG</h3>
                        <p><?php echo app('translator')->get('site.profit'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo e($patients->count()); ?></h3>

                        <p><?php echo app('translator')->get('site.patient'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <a href="#" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo e($doctors->count()); ?></h3>

                        <p><?php echo app('translator')->get('site.doctors'); ?></p>
                    </div>
                    <div class="icon">
                        <ion-icon name="airplane-outline"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo e($requests->count()); ?></h3>

                        <p><?php echo app('translator')->get('site.appointments'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div><!-- end of row -->




<div class="row">
    <!-- TABLE: LATEST ORDERS -->
    <div class="col-lg-6 col-xs-6">

        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title"><?php echo app('translator')->get('site.latest_doctors'); ?></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo app('translator')->get('site.name'); ?></th>
                    <th><?php echo app('translator')->get('site.email'); ?></th>
                    <th><?php echo app('translator')->get('site.phone'); ?></th>
                    <th><?php echo app('translator')->get('site.time'); ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $doctors_latest_7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(asset('images/'."$doctor->image")); ?>" alt="" style="width:30px;height:30px;border-radius:50%">
                            </td>
                            <td><?php echo e($doctor->name); ?></td>
                            <td><?php echo e($doctor->email); ?></td>
                            <td><?php echo e($doctor->phone); ?></td>
                            <td><?php echo e($doctor->created_at->diffForHumans()); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
            </div>
        </div>
    <!-- /.box -->
    </div>

    <div class="col-lg-6 col-xs-6">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title"><?php echo app('translator')->get('site.latest_patients'); ?></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo app('translator')->get('site.name'); ?></th>
                    <th><?php echo app('translator')->get('site.email'); ?></th>
                    <th><?php echo app('translator')->get('site.phone'); ?></th>
                    <th><?php echo app('translator')->get('site.time'); ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $patients_latest_7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(asset('images/'."$patient->image")); ?>" alt="" style="width:30px;height:30px;border-radius:50%">
                            </td>
                            <td><?php echo e($patient->name); ?></td>
                            <td><?php echo e($patient->email); ?></td>
                            <td><?php echo e($patient->phone); ?></td>
                            <td><?php echo e($patient->created_at->diffForHumans()); ?> </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
            </div>
        </div>
    <!-- /.box -->
        </div>



    </div>






<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

    <script>

        //line chart
        var line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: [
                {y: '2011  Q1' item1: 2666},
                {y: '2011  Q2' item1: 2778},
                {y: '2011  Q3' item1: 4921},
                {y: '2011  Q4' item1: 3767},
                {y: '2011  Q1' item1: 2666},
                {y: '2011  Q2' item1: 2666},
                {y: '2011  Q3' item1: 2666},
                {y: '2011  Q4' item1: 2666},

            ],
            xkey: 'y',
            ykeys: ['item1'],
            labels: ['<?php echo app('translator')->get('site.total'); ?>'],
            lineWidth: 2,
            hideHover: 'auto',
            gridStrokeWidth: 0.4,
            pointSize: 4,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10
        });
    </script>

<?php $__env->stopPush(); ?>




<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>