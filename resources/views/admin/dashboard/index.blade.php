@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.dashboard')</h1>
    </section>


    <section class="content">

        <div class="row">

            {{-- categories--}}
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>1800 EG</h3>
                        <p>@lang('site.profit')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{--products--}}
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $patients->count() }}</h3>

                        <p>@lang('site.patient')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{--clients--}}
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{  $doctors->count()  }}</h3>

                        <p>@lang('site.doctors')</p>
                    </div>
                    <div class="icon">
                        <ion-icon name="airplane-outline"></ion-icon>
                    </div>
                    <a href="#" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{--users--}}
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{  $requests->count()  }}</h3>

                        <p>@lang('site.appointments')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div><!-- end of row -->

{{-- <div class="graph" style="display: flex ; justify-content:space-around">
    <div id="bonga"></div>
    <div id="graph"></div>
</div> --}}


<div class="row">
    <!-- TABLE: LATEST ORDERS -->
    <div class="col-lg-6 col-xs-6">

        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">@lang('site.latest_doctors')</h3>

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
                    <th>@lang('site.name')</th>
                    <th>@lang('site.email')</th>
                    <th>@lang('site.phone')</th>
                    <th>@lang('site.time')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($doctors_latest_7 as $doctor )
                        <tr>
                            <td><img src="{{ asset('images/'."$doctor->image") }}" alt="" style="width:30px;height:30px;border-radius:50%">
                            </td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
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
            <h3 class="box-title">@lang('site.latest_patients')</h3>

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
                    <th>@lang('site.name')</th>
                    <th>@lang('site.email')</th>
                    <th>@lang('site.phone')</th>
                    <th>@lang('site.time')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($patients_latest_7 as  $patient )
                        <tr>
                            <td><img src="{{ asset('images/'."$patient->image") }}" alt="" style="width:30px;height:30px;border-radius:50%">
                            </td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->created_at->diffForHumans()}} </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
            </div>
        </div>
    <!-- /.box -->
        </div>



    </div>






@endsection


@push('scripts')

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
            labels: ['@lang('site.total')'],
            lineWidth: 2,
            hideHover: 'auto',
            gridStrokeWidth: 0.4,
            pointSize: 4,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10
        });
    </script>

@endpush



