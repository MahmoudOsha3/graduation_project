@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.doctors')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li><a href="{{route('doctors.index')}}">@lang('site.doctors')</a></li>
        <li class="active">@lang('site.edit-doctor')</li>
    </ol>

    <div class="box box-primary">
        <div class="box-header">

        </div>
        <div class="box-body">

            @include('partials._errors')

            <form action="{{ route('doctors.update',$doctor->id) }}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name_ar">@lang('site.ar.name')</label>
                    <input type="text" name="name_ar" id="name_ar" value="{{ $doctor->getTranslation('name' , 'ar') }}"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name_en">@lang('site.en.name')</label>
                    <input type="text" name="name_en" id="name_en" value="{{ $doctor->getTranslation('name' , 'en') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">@lang('site.email')</label>
                    <input type="email" name="email" id="email" value="{{ $doctor->email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">@lang('site.password')</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone">@lang('site.phone')</label>
                    <input type="tel" name="phone" id="phone" value="{{ $doctor->phone }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nid">@lang('site.nid')</label>
                    <input type="number" name="nid" id="nid" value="{{ $doctor->nid }}" class="form-control">
                </div>


                <div class="form-group">
                    <input type="hidden" value="{{ $doctor->getTranslation('bio' , 'ar') }}" name="bio_ar" id="bio" class="form-control">
                </div>

                <div class="form-group">
                    <input type="hidden" value="{{ $doctor->getTranslation('bio' , 'en') }}" name="bio_en" id="bio" class="form-control">
                </div>

                <div class="form-group">
                    <label for="government">@lang('site.government')</label>
                    <select name="government_id" id="government" class="form-control">
                        <option value="{{null}}" disabled>...</option>
                        @foreach ($governments as $government)
                            <option value="{{ $government->id }}" @selected($doctor->government->id == $government->id)>{{ $government->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="special">@lang('site.specialization')</label>
                    <select name="special_id" id="special" class="form-control">
                        <option value="{{null}}" disabled>...</option>
                        @foreach ($specialization as $special)
                            <option value="{{ $special->id }}" @selected($doctor->special->id == $special->id )>{{ $special->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('site.confirm')</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
