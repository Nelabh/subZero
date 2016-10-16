<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Welcome {{Auth::user()->name}}</strong>
                    </span> <span class="text-muted text-xs block"></span> </span> </a>

                </div>
                <div class="logo-element">
                    ABCD
                </div>
            </li>
                @if(Request::path() == 'dashboard')

            <li class="active">
                <a href="{{URL::route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            @else

            <li >
                <a href="{{URL::route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            @endif
        </ul>

    </div>
</nav>
