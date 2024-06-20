<aside class="main-sidebar">

    <section class="sidebar">

        <a href="{{ route('doctor.profile') }}">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('images/'.auth()->user()->image) }}" class="img-circle"  alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ ucfirst(auth()->user()->name)  }}</p>
                    <small><i class="fa fa-circle text-success"></i> Doctor</small>
                </div>
            </div>
        </a>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="{{ route('doctor.dashboard') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
            <li><a href="{{ route('appointments.index') }}"><i class="bi bi-calendar-check"></i> <span>@lang('site.MyAppointments')</span></a></li>
            <li><a href="{{ route('doctor.requests') }}"><i class="bi bi-ticket-perforated"></i> <span>@lang('site.Requests')</span></a></li>
            <li><a href="{{ route('doctor.profile') }}"><i class="bi bi-person-circle"></i> <span>@lang('site.profile')</span></a></li>
            <li><a href="{{ route('doctor.clinic') }}"><i class="bi bi-person-circle"></i> <span>@lang('site.clinic')</span></a></li>



            {{-- <li><a href="#"><i class="fa fa-user"></i><span>@lang('site.myprofile')</span></a></li>
            <li><a href="#"><i class="fa fa-ticket"></i><span>@lang('site.mytickets')</span></a></li> --}}
            </li>
        </ul>

    </section>



</aside>
