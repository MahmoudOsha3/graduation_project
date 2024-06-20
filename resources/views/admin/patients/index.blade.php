@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.patients')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.patients')</li>
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
            <h3 class="box-title" style="margin-bottom: 15px">@lang('site.count-patients') : <small style="font-size:17px">{{ $patients->count() }}</small></h3>
            <form action="{{ route('patients.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search-about-patient')" value="{{request()->search}}">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
            </form>
<!-- Add patient -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    @lang('site.add-patient')
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">@lang('site.add-patient')</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form action="{{ route('patients.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">@lang('site.name')</label>
                        <input type="text" name="name" class="form-control" id="name">

                        <label for="email">@lang('site.email')</label>
                        <input type="email" name="email" class="form-control" id="email">

                        <label for="password">@lang('site.password')</label>
                        <input type="password" name="password" class="form-control" id="password"><br>

                        <label for="phone">@lang('site.phone')</label>
                        <input type="tel" name="phone" class="form-control" id="phone">

                        <label for="address">@lang('site.address')</label>
                        <input type="text" name="address" class="form-control" id="address">


                        <label for="phone">@lang('site.government')</label>
                        <select name="gov_id" class="form-control">
                            <option value="{{ null }}" selected>....</option>
                            @foreach ($governments as $government)
                                <option value="{{ $government->id }}">{{ $government->name }}</option>
                            @endforeach
                        </select>
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

            @if($patients->count() > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>@lang('site.number')</th>
                        <th>@lang('site.name')</th>
                        <th>@lang('site.email')</th>
                        <th>@lang('site.phone')</th>
                        <th>@lang('site.government')</th>
                        <th>@lang('site.address')</th>
                        <th>@lang('site.action')</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($patients as $index => $patient)
                        <tr>
                            <td>{{ ++ $index }}</td>
                            <td>{{ $patient->name}}</td>
                            <td>{{ $patient->email}}</td>
                            <td>{{ $patient->phone}}</td>
                            <td>{{ $patient->governmnet->name}}</td>
                            <td>{{ $patient->address}}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$patient->id}}">
                                    <i class="fa fa-edit"></i> @lang('site.edit')
                                </button>

                                <form action="{{ route('patients.destroy' , $patient->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                </form>
                            </td>

                        <!-- edit Modal -->
                        <div class="modal fade" id="edit{{$patient->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalCenterTitle">@lang('site.edit-patient')</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('patients.update' , $patient->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name_ar">@lang('site.name')</label>
                                                <input type="text" value="{{ $patient->name }}" name="name" class="form-control" id="name_ar"><br>
                                                <label for="email">@lang('site.email')</label>
                                                <input type="email" value="{{ $patient->email}}"  name="email" class="form-control" id="email">
                                                <label for="password">@lang('site.password')</label>
                                                <input type="password" name="password" class="form-control" id="password"><br>

                                                <label for="phone">@lang('site.phone')</label>
                                                <input type="tel" name="phone" value="{{ $patient->phone }}" class="form-control" id="phone">

                                                <label for="address">@lang('site.address')</label>
                                                <input type="tel" name="address" value="{{ $patient->address }}" class="form-control" id="address">

                                                <label for="phone">@lang('site.government')</label>
                                                <select name="gov_id" class="form-control">
                                                    <option value="{{ null }}" selected>....</option>
                                                    @foreach ($governments as $government)
                                                        <option value="{{ $government->id }}" @selected($patient->governmnet->id == $government->id)>{{ $government->name }}</option>
                                                    @endforeach
                                                </select>
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
