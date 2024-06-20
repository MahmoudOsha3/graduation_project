        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area doctor_page">
            <div class="container">
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Search about name of doctor ... ">
                <br><br>
                <div class="row">
                    @forelse ($doctors as $doctor)
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ route('site.doctor-profile' , $doctor->id ) }}">
                                <div class="single_expert mb-40">
                                    <div class="expert_thumb">
                                        <img src="{{ asset('images/'."$doctor->image") }}" style="height:200px" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>{{ $doctor->name }}</h3>
                                        <span>{{ $doctor->special->name}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="alert alert-secondary form-control" style="text-align: center" role="alert">
                            No data found
                        </div>
                    @endforelse

                    {{-- <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/2.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/3.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/4.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/6.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/7.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/8.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_expert mb-40">
                            <div class="expert_thumb">
                                <img src="{{ asset('Website/img/experts/9.png') }}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- expert_doctors_area_end -->
