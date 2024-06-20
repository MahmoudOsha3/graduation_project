{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/icheck/square/blue.css') }}">

</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 700px">
    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  <div class="login-logo">
    <a href="#"><b>Med</b>Vista</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up new an account user</p>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('register.patient') }}" enctype="multipart/form-data">
                @csrf

              <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputPassword1">@lang('site.name')</label>
                      <input type="text" class="form-control"  name="name">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">@lang('site.email')</label>
                      <input type="email" class="form-control"  name="email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">@lang('site.password')</label>
                      <input type="password" class="form-control"  name="password">
                    </div>



                  <div class="form-group">
                    <label for="exampleInputPassword1">@lang('site.phone')</label>
                    <input type="number" class="form-control"  name="phone">

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">@lang('site.address')</label>
                    <input type="text" class="form-control"  name="address">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">@lang('site.government')</label>
                    <select name="gov_id" class="form-control">
                        @foreach ($governments as $governemnt)
                            <option value="{{ $governemnt->id }}">{{ $governemnt->name }}</option>
                        @endforeach
                    </select>
                </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <h5><a href="{{ route('website.login') }}">Login now</a></h5>
          </div>
    </div>

</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('dashboard_files/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('dashboard_files/plugins/icheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>



