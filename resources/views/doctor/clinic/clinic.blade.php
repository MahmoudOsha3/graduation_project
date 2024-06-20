@extends('layouts.DashboardDoctor.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.clinics')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.clinics')</li>
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
            <h3 class="box-title" style="margin-bottom: 15px">@lang('site.count-clinics') : <small style="font-size:17px">{{ $clinics->count() }}</small></h3>
            <form action="{{ route('clinics.index') }}" method="get">
                <div class="row">

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="@lang('site.search-about-clinic')" value="{{request()->search}}">
                    </div>

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
            </form>
<!-- Add clinic -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    @lang('site.add-clinic')
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">@lang('site.add-clinic')</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form action="{{ route('doctor.clinic.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name_ar">@lang('site.ar.name')</label>
                        <input type="text" name="name_ar" class="form-control" id="name_ar"><br>
                        <label for="name_en">@lang('site.en.name')</label>
                        <input type="text" name="name_en" class="form-control" id="name_en">
                        <label for="address">@lang('site.address')</label>
                        <input type="text" name="address" class="form-control" id="address">
                        <label for="price">@lang('site.price')</label>
                        <input type="number" name="price" class="form-control" id="price">
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

            @if($clinics->count() > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>@lang('site.number')</th>
                        <th>@lang('site.clinic')</th>
                        <th>@lang('site.address')</th>
                        <th>@lang('site.price')</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($clinics as $index => $clinic)
                        <tr>
                            <td>{{ ++ $index }}</td>
                            <td>{{ $clinic->name}}</td>
                            @if ($clinic->address)
                                <td>{{ $clinic->address}}</td>
                            @else
                                <td>Null</td>
                            @endif
                            <td>{{ $clinic->price}} EG</td>
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
