@extends('layouts.website.app')

@section('title') Profile @endsection
<style>


.profile {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width:950px;
    text-align: center;
}

.profile-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

form label {
    margin-bottom: 5px;
    text-align: left;
}

form input, form textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: calc(100% - 22px);
}

form button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
}

form button:hover {
    background-color: #575757;
}
table {
    width:950px;
    text-align: center;
    /* max-width: 800px; */
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    text-align: center
}

th {
    background-color: #333;
    color: #fff;
}

tr:hover {
    background-color: #f4f4f4;
}

.profile-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}
</style>
@livewireStyles

@section('content')
<!-- bradcam_area_start  -->
<div class="bradcam_area bradcam_overlay" style="background-image:#">
    <div class="container" style="display: flex">
        {{-- <img src="#" style="height:300px" alt="image"> --}}
        <div class="row" style="margin-left: 30px;marign-right:30px">
            <div class="col-xl-12">
                <div class="container">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        <h5>{{ session()->get('success'); }}</h5>
                    </div>
                    @endif
                    <div class="profile">
                        <img src="{{ asset('images/'."$user->image") }}" alt="personal image" class="profile-img">
                        <h2>{{ $user->name }}</h2>
                        <h5>{{ $user->email }}</h5>
                        {{-- @php  @endphp --}}
                        <form method="POST" action="{{ route('user-profile-update' , $user->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label for="username">@lang('site.name')</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="email">@lang('site.email')</label>
                            <input type="email" name="email" value="{{ $user->email }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="phone">@lang('site.phone')</label>
                            <input type="tel" name="phone" id="phone" value="{{ $user->phone }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <input type="tel"   name="phone" value="{{ $user->phone }}> --}}

                            <label for="password">@lang('site.password')</label>
                            <input type="password" id="password" password="password">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="image">@lang('site.image')</label>
                            <input type="file" id="image" name="image">

                            {{-- <input type="submit" value="@lang('site')"> --}}
                            <button type="submit">@lang('site.update')</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>



{{-- appointment table --}}
<section class="blog_area single-post-area section-padding"  style="margin-left:120px ">>
    <div class="whole-wrap">
        <div class="container box_1170" >
            <h2 style="color: white">@lang('site.MyAppointments')</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('site.doctor')</th>
                        <th>@lang('site.date')</th>
                        <th>@lang('site.day')</th>
                        <th>@lang('site.time')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments_user as $appointment)
                    <tr>
                        <td><img src="{{ asset('images/'.$appointment->doctor->image) }}" alt="ing" class="profile-img"></td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->day }}</td>
                        <td>{{ $appointment->oclock }} pm</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>

</section>

@livewireScripts

@endsection
