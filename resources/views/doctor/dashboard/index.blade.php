@extends('layouts.DashboardDoctor.app')


@section('content')

<div class="content-wrapper">
    <section class="content-header">
        {{-- @if(auth()->user()->clinic->name)
            <h1>{{ auth()->user()->clinic->name }}  - {{ auth()->user()->special->name }}</h1>
        @endif --}}
    </section>


    <section class="content">

        <div class="row">

            {{-- categories--}}
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $profit }} EG</h3>
                        <p>@lang('site.profit')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a class="small-box-footer">@lang('site.profit') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{--products--}}
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $count_requests }}</h3>
                        <p>@lang('site.requests')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <a href="{{ route('doctor.requests') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{--clients--}}
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $count_comments }}</h3>

                        <p>@lang('site.comments')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                        {{-- <ion-icon name="airplane-outline"></ion-icon> --}}
                    </div>
                    <a href="#" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>



        </div><!-- end of row -->


        <div class="row">
            <!-- TABLE: LATEST ORDERS -->
            <div class="col-lg-6 col-xs-6">

                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.latest_appointment')</h3>

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
                            <th>@lang('site.patient')</th>
                            <th>@lang('site.email')</th>
                            <th>@lang('site.phone')</th>
                            <th>@lang('site.date')</th>
                            <th>@lang('site.day')</th>
                            <th>@lang('site.oclock')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request )
                                <tr>
                                    <?php $patient = $request->patient ; ?>
                                    <td><img src="{{ asset('images/'."$patient->image") }}" alt="" style="width:30px;height:30px;border-radius:50%">
                                    </td>
                                    <td>{{ $request->patient->name }}</td>
                                    <td>{{ $request->patient->email }}</td>
                                    <td>{{ $request->patient->phone }}</td>
                                    <td>{{ $request->date }}</td>
                                    <td>{{ $request->day }}</td>
                                    <td>{{ $request->oclock }} pm</td>
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
                    <h3 class="box-title">@lang('site.latest_comments')</h3>

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
                            <th>@lang('site.patient')</th>
                            <th>@lang('site.comments')</th>
                            <th>@lang('site.oclock')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as  $comment )
                                <tr>
                                    <?php $patient = $comment->patient ; ?>
                                    <td><img src="{{ asset('images/'."$patient->image") }}" alt="" style="width:30px;height:30px;border-radius:50%">
                                    </td>
                                    <td>{{ $comment->patient->name }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->created_at->diffForHumans()}} </td>
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




        </section><!-- end of content -->



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


