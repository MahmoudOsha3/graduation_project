<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p> {{-- ucfirst(auth()->user()->name) --}}
                <small><i class="fa fa-circle text-success"></i> Admin</small>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-th"></i> <span>@lang('site.dashboard')</span></a></li>
            <li><a href="{{ route('doctors.index') }}"><i class="bi bi-person-heart"></i> <span>@lang('site.doctors')</span></a></li>
            <li><a href="{{ route('clinics.index') }}"><i class="bi bi-hospital-fill"></i> <span>@lang('site.clinics')</span></a></li>
            <li><a href="{{ route('specialization.index') }}"><i class="bi bi-hourglass-split"></i> <span>@lang('site.specialization')</span></a></li>
            <li><a href="{{ route('government.index') }}"><i class="bi bi-bus-front-fill"></i> <span>@lang('site.governments')</span></a></li>
            <li><a href="{{ route('patients.index') }}"><i class="fa fa-users"></i> <span>@lang('site.patients')</span></a></li>
            <li><a href="{{ route('requests.index') }}"><i class="bi bi-calendar2-date"></i> <span>@lang('site.appointments')</span></a></li>
            {{-- <li><a href="#"><i class="bi bi-chat-dots-fill"></i> <span>@lang('site.comments')</span></a></li> --}}

            {{-- <li><a href="#"><i class="fa fa-user"></i><span>@lang('site.myprofile')</span></a></li>
            <li><a href="#"><i class="fa fa-ticket"></i><span>@lang('site.mytickets')</span></a></li> --}}



            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            </li>
        </ul>

    </section>



</aside>
