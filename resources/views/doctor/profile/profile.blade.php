@extends('layouts.DashboardDoctor.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.profile')</h1>
    </section>
    <br>
    <ol class="breadcrumb">
        <li><a href="{{ route('doctor.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li class="active">@lang('site.profile')</li>
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
    <div class="row">
        <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('images/'.$doctor->image) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $doctor->name }}</h3>

              <p class="text-muted text-center">{{ $doctor->email }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>@lang('site.phone')</b> <a class="pull-right">{{ $doctor->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>@lang('site.special')</b> <a class="pull-right">{{ $doctor->special->name }}</a>
                </li>
                <li class="list-group-item">
                    <b>@lang('site.clinic')</b> <a class="pull-right">{{ $doctor->clinic->name }}</a>
                </li>
                <li class="list-group-item">
                    <b>@lang('site.price')</b> <a class="pull-right">{{ $doctor->clinic->price }}</a>
                </li>
                <li class="list-group-item">
                  <b>@lang('site.government')</b> <a class="pull-right">{{ $doctor->government->name }}</a>
                </li>
              </ul>
              <b>@lang('site.bio')</b> <a class="pull-right">{{ $doctor->bio  }}</a>
              <br><br><br><br><br><br>
              <a href="#" class="btn btn-primary btn-block"><b>@lang('site.edit')</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        {{-- end column --}}

        {{-- form of edit --}}
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">@lang('site.edit_profile')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('doctor.profile.update' , $doctor->id ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="box-body">

                    <div class="row">

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.phone')</label>
                              <input type="number" class="form-control" name="phone" value="{{ $doctor->phone }}">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.government')</label>
                            <select name="gov_id" class="form-control" >
                                @foreach ($governments as $government)
                                    <option value="{{ $government->id }}" @selected($doctor->gov_id == $government->id)>{{ $government->name }}</option>
                                @endforeach
                            </select>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.ar.clinic')</label>
                            <input type="text" class="form-control"  name="clinic_name_ar" value="{{ $doctor->clinic->getTranslation('name' , 'ar') }}">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.en.clinic')</label>
                            <input type="text" class="form-control"  name="clinic_name_en" value="{{ $doctor->clinic->getTranslation('name' , 'en') }}">
                          </div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputPassword1">price</label>
                        <input type="text" class="form-control" name="clinic_price" value="{{ $doctor->clinic->price }}">
                      </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('site.ar.bio')</label>
                        <textarea name="bio_ar"  cols="85" rows="2">{{ $doctor->getTranslation('bio' , 'ar') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('site.en.bio')</label>
                        <textarea name="bio_en"  cols="85" rows="2">{{ $doctor->getTranslation('bio' , 'en') }}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="image">@lang('site.edit-image')</label>
                      <input type="file" name="image" id="image">
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
    {{-- end row --}}
</section>
</div>





@endsection
