@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.doctors')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.doctors')</li>
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
            <h3 class="box-title" style="margin-bottom: 15px">@lang('site.count-doctors') : <small style="font-size:17px">{{ $doctors->count() }}</small></h3>
            <form action="{{ route('doctors.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search-about-doctor')" value="{{request()->search}}">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
            </form>
            <!-- Add doctor -->
            <a href="{{ route('doctors.create') }}" class="btn btn-primary">@lang('site.add-doctor')</a>

        </div>
    </div>

        </div><!-- end of box header -->

        <div class="box-body">

            @if($doctors->count() > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>@lang('site.number')</th>
                        <th>@lang('site.name')</th>
                        <th>@lang('site.email')</th>
                        <th>@lang('site.phone')</th>
                        <th>@lang('site.specialization')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.action')</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($doctors as $index => $doctor)
                        <tr>
                            <td>{{ ++ $index }}</td>
                            <td>{{ $doctor->name}}</td>
                            <td>{{ $doctor->email}}</td>
                            <td>{{ $doctor->phone}}</td>
                            <td>{{ $doctor->special->name}}</td>
                            @php
                                $status = null ;
                                $icon = null ;
                                if($doctor->status == 0 ){
                                    $status = __('site.new_doctor') ;
                                    $color = 'blue' ;
                                    $icon = 'bi bi-person-fill-dash';

                                }elseif($doctor->status == 1 ) {
                                    $status = __('site.verify') ;
                                    $color = 'green' ;
                                    $icon = 'bi bi-patch-check-fill';
                                }elseif($doctor->status == 2 ){
                                    $status = __('site.block') ;
                                    $color = 'red' ;
                                    $icon = "bi bi-x-circle-fill";
                                }
                            @endphp
                            <td style="color:{{$color}};font-weight:bold"><i class="{{ $icon }}"></i> {{ $status }}</td>
                            <td>
                                <a href="{{ route('doctors.edit' , $doctor->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i> @lang('site.edit')</a>

                                <form action="{{ route('doctors.destroy' , $doctor->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                </form>

                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#status{{$doctor->id}}">
                                    <i class="bi bi-emoji-expressionless"></i>  @lang('site.status')
                                </button>
                            </td>
                        </tr>

                        <!-- edit status Modal -->
                        <div class="modal fade" id="status{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h3 class="modal-title" style="text-align: center">@lang('site.status-doctor')</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer" style="display:flex;margin-left:180px">

                                    <form action="{{ route('doctors.verify') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                                                    <input type="hidden" name="status" value="{{ 1 }}">
                                                    <button type="submit" class="btn btn-primary"><i class="bi bi-patch-check"></i> @lang('site.verify')</button>
                                                </div>
                                            </div>
                                    </form>




                                    <form action="{{ route('doctors.block') }}" method="POST">
                                        @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                                                    <input type="hidden" name="status" value="{{ 2 }}">
                                                    <button type="submit" class="btn btn-danger"><i class="bi bi-ban"></i> @lang('site.block')</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
