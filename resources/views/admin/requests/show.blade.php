@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.request-report')</h1>
    </section><br>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.request-report')</li>
    </ol>
</section>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
    @endif
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <ul class="list-group">

                <li class="list-group-item active">@lang('site.request-report')</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.name')</span> : <a href="#">{{ $request->patient->name }}</a></li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.email') : </span>{{ $request->patient->email }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.phone-patient') : </span>{{ $request->patient->phone }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.doctor') : </span>{{ $request->doctor->name }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.clinic') : </span>{{ $request->doctor->clinic->name }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.date')  :  </span>{{ $request->date }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.oclock') : </span> {{ $request->oclock }}</li>
                <li class="list-group-item"><span style="color:rgb(6, 6, 187)">@lang('site.price') :  </span>{{ $request->doctor->clinic->price }} EG</li>
              </ul>
        </div>
    </div>

        </div><!-- end of box header -->

        <div class="box-body">


        </div><!-- end of box body -->


    </div><!-- end of box -->
</div>

@endsection
