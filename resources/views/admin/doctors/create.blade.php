@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.doctors')</h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
        <li><a href="{{route('doctors.index')}}">@lang('site.doctors')</a></li>
        <li class="active">@lang('site.add-doctor')</li>
    </ol>

    <div class="box box-primary">
        <div class="box-header">

        </div>
        <div class="box-body">

            @include('partials._errors')

            <form action="{{route('doctors.store')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name_ar">@lang('site.ar.name')</label>
                    <input type="text" name="name_ar" id="name_ar"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="name_en">@lang('site.en.name')</label>
                    <input type="text" name="name_en" id="name_en" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">@lang('site.email')</label>
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">@lang('site.password')</label>
                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone">@lang('site.phone')</label>
                    <input type="tel" name="phone" id="phone" value="{{old('phone')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nid">@lang('site.nid')</label>
                    <input type="number" name="nid" id="nid" value="{{old('phone')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image">@lang('site.image')</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="img_verify">@lang('site.img_doctor_verify')</label>
                    <input type="file" name="img_verify" id="img_verify" class="form-control">
                </div>

                <div class="form-group">
                    <label for="bio">@lang('site.ar.bio')</label> {{-- site.en.bio --}}
                    <textarea  name="bio_ar" id="bio" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="bio">@lang('site.en.bio')</label> {{-- site.en.bio --}}
                    <textarea  name="bio_en" id="bio" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="government">@lang('site.government')</label>
                    <select name="government_id" id="government" class="form-control">
                        <option value="{{null}}" disabled>...</option>
                        @foreach ($governments as $government)
                            <option value="{{ $government->id }}">{{ $government->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="special">@lang('site.specialization')</label>
                    <select name="special_id" id="special" class="form-control">
                        <option value="{{null}}" disabled>...</option>
                        @foreach ($specialization as $special)
                            <option value="{{ $special->id }}">{{ $special->name }}</option>
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
