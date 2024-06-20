@extends('layouts.website.app')

@section('title') Doctors @endsection

@livewireStyles

@section('content')
        <!-- bradcam_area_start  -->
        <div class="bradcam_area breadcam_bg_2 bradcam_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Doctors</h3>
                            <p><a href="index.html">Home /</a> Doctors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end  -->

        <livewire:doctor-livewire />
        {{-- @livewire('doctor-livewire' , ['doctors' => $doctors]) --}}


        @livewireScripts
@endsection
