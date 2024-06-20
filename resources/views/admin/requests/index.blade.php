@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.requests')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.requests')</li>
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
            <h3 class="box-title" style="margin-bottom: 15px">@lang('site.count-requests') : <small style="font-size:17px">{{ $requests->count() }}</small></h3>
            <form action="{{ route('requests.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search-about-appointment')" value="{{request()->search}}">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
            </form>

        </div>
    </div>

        </div><!-- end of box header -->

        <div class="box-body">

            @if($requests->count() > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>@lang('site.number')</th>
                        <th>@lang('site.name')</th>
                        <th>@lang('site.phone-patient')</th>
                        <th>@lang('site.doctor')</th>
                        <th>@lang('site.clinic')</th>
                        <th>@lang('site.date')</th>
                        <th>@lang('site.price')</th>
                        {{-- <th>@lang('site.price')</th> --}}
                        <th>@lang('site.action')</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($requests as $index => $request)
                        <tr>
                            <td>{{ ++ $index }}</td>
                            <td>{{ $request->patient->name}}</td>
                            <td>{{ $request->patient->phone}}</td>
                            <td>{{ $request->doctor->name}}</td>
                            <td>{{ $request->doctor->clinic->name}}</td>
                            <td>{{ $request->date}}</td>
                            <td>{{ $request->doctor->clinic->price }} EG</td>
                            <td>
                                <a href="{{ route('requests.show' , $request->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.report')</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $trips->links() }} --}}
            @else
                <h2>@lang('site.no_data_found')</h2>
            @endif

        </div><!-- end of box body -->


    </div><!-- end of box -->
</div>

@endsection
