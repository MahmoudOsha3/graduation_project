@extends('layouts.DashboardDoctor.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.MyAppointments')</h1>
    </section>
    <br>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.MyAppointments')</li>
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
            <h3 class="box-title" style="margin-bottom: 15px">@lang('site.count-appointments') : <small style="font-size:17px">{{ $appointments->count() }}</small></h3>
            <form action="{{ route('appointments.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search-about-appointment')" value="{{request()->search}}">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
            </form>
<!-- Add appointment -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    @lang('site.add-appointment')
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">@lang('site.add-appointment')</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="days">@lang('site.day')</label><br>
                        <select name="days" id="days" class="form-control">
                            <option value="{{ null }}" disabled selected>...</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        <label for="start_at">@lang('site.Start_at')</label>
                        <input type="number"  name="Start_at" class="form-control" id="start_at">
                        <label for="End_at">@lang('site.End_at')</label>
                        <input type="number" name="End_at"  class="form-control" id="End_at"><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('site.close')</button>
                    <button type="submit" class="btn btn-primary">@lang('site.confirm')</button>
                </div>
            </form>
        </div>
    </div>
  </div>
                    </div>
                </div>

        </div><!-- end of box header -->

        <div class="box-body">

            @if($appointments->count() > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>@lang('site.number')</th>
                        <th>@lang('site.days')</th>
                        <th>@lang('site.Start_at')</th>
                        <th>@lang('site.End_at')</th>
                        <th>@lang('site.action')</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $index => $appointment)
                        <tr>
                            <td>{{ ++ $index }}</td>
                            <td>{{ $appointment->days }}</td>
                            <td>{{ $appointment->Start_at}} pm</td>
                            <td>{{ $appointment->End_at}} pm</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$appointment->id}}">
                                    <i class="fa fa-edit"></i> @lang('site.edit')
                                </button>

                                <form action="{{ route('appointments.destroy' , $appointment->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                </form>
                            </td>

                        <!-- edit Modal -->
                        <div class="modal fade" id="edit{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalCenterTitle">@lang('site.edit-appointment')</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('appointments.update' , $appointment->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="days">@lang('site.day')</label><br>
                                                <select name="days" id="days" class="form-control">
                                                        <option value="{{ null }}" disabled selected>...</option>
                                                    @foreach ($days as $day)
                                                        <option value="{{ $day }}">{{ $day }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="number">@lang('site.Start_at')</label>
                                                <input type="number" value="{{ $appointment->Start_at}}"  name="Start_at" class="form-control" id="number">
                                                <label for="End_at">@lang('site.End_at')</label>
                                                <input type="number" name="End_at" value="{{ $appointment->End_at}}" class="form-control" id="End_at"><br>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('site.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('site.confirm')</button>
                                        </div>
                                    </form>
                            </div>
                            </div>
                        </div>

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
