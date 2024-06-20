<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        
    </section>


    <section class="content">

        <div class="row">

            
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($profit); ?> EG</h3>
                        <p><?php echo app('translator')->get('site.profit'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a class="small-box-footer"><?php echo app('translator')->get('site.profit'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo e($count_requests); ?></h3>
                        <p><?php echo app('translator')->get('site.requests'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <a href="<?php echo e(route('doctor.requests')); ?>" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo e($count_comments); ?></h3>

                        <p><?php echo app('translator')->get('site.comments'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                        
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
                    <h3 class="box-title"><?php echo app('translator')->get('site.latest_appointment'); ?></h3>

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
                            <th><?php echo app('translator')->get('site.patient'); ?></th>
                            <th><?php echo app('translator')->get('site.email'); ?></th>
                            <th><?php echo app('translator')->get('site.phone'); ?></th>
                            <th><?php echo app('translator')->get('site.date'); ?></th>
                            <th><?php echo app('translator')->get('site.day'); ?></th>
                            <th><?php echo app('translator')->get('site.oclock'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $patient = $request->patient ; ?>
                                    <td><img src="<?php echo e(asset('images/'."$patient->image")); ?>" alt="" style="width:30px;height:30px;border-radius:50%">
                                    </td>
                                    <td><?php echo e($request->patient->name); ?></td>
                                    <td><?php echo e($request->patient->email); ?></td>
                                    <td><?php echo e($request->patient->phone); ?></td>
                                    <td><?php echo e($request->date); ?></td>
                                    <td><?php echo e($request->day); ?></td>
                                    <td><?php echo e($request->oclock); ?> pm</td>
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
                    <h3 class="box-title"><?php echo app('translator')->get('site.latest_comments'); ?></h3>

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
                            <th><?php echo app('translator')->get('site.patient'); ?></th>
                            <th><?php echo app('translator')->get('site.comments'); ?></th>
                            <th><?php echo app('translator')->get('site.oclock'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $patient = $comment->patient ; ?>
                                    <td><img src="<?php echo e(asset('images/'."$patient->image")); ?>" alt="" style="width:30px;height:30px;border-radius:50%">
                                    </td>
                                    <td><?php echo e($comment->patient->name); ?></td>
                                    <td><?php echo e($comment->comment); ?></td>
                                    <td><?php echo e($comment->created_at->diffForHumans()); ?> </td>
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




        </section><!-- end of content -->



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



<?php echo $__env->make('layouts.DashboardDoctor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/doctor/dashboard/index.blade.php ENDPATH**/ ?>