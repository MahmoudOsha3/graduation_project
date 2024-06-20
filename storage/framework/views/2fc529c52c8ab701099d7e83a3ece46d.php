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
                        <h3>mahmoud</h3>
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
                        <h3>hello</h3>

                        <p><?php echo app('translator')->get('site.booking'); ?></p>
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
                        <h3><?php echo e(5); ?></h3>

                        <p><?php echo app('translator')->get('site.trips'); ?></p>
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
                        <h3><?php echo e(10); ?></h3>

                        <p><?php echo app('translator')->get('site.users'); ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"><?php echo app('translator')->get('site.read'); ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div><!-- end of row -->

        
<div class="graph" style="display: flex ; justify-content:space-around">
    <div id="bonga"></div>
    <div id="graph"></div>
</div>





    <script>
        Morris.Donut({
        element: 'graph',
        data: [
            {value: 40, label: 'Cairo'},
            {value: 15, label: 'Alex'},
            {value: 10, label: 'Aswan'},
            {value: 5, label: 'Shobra'}
        ],
        formatter: function (x) { return x + "%"}
        }).on('click', function(i, row){
        console.log(i, row);
        });

        // Use Morris.Area instead of Morris.Line
        Morris.Area({
            element: 'bonga',
            behaveLikeLine: true,
            data: [
                {x: '2011 Q1', y: 3, z: 3},
                {x: '2011 Q2', y: 2, z: 1},
                {x: '2011 Q3', y: 2, z: 4},
                {x: '2011 Q4', y: 3, z: 3}
            ],
            xkey: 'x',
            ykeys: ['y', 'z'],
            labels: ['Y', 'Z']
        });
    </script>





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



<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/dashboard/admin/index.blade.php ENDPATH**/ ?>