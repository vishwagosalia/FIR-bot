<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--<i class="fas fa-fw fa-folder"></i>--}}
            {{--<span>Pages</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu" aria-labelledby="pagesDropdown">--}}
            {{--<h6 class="dropdown-header">Users:</h6>--}}
            {{--<a class="dropdown-item" href="{{ route('admin.user.index') }}">View All</a>--}}
            {{--<a class="dropdown-item" href="{{ route('admin.user.create') }}">Create</a>--}}
            {{--<a class="dropdown-item" href="forgot-password.html">Forgot Password</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<h6 class="dropdown-header">Other Pages:</h6>--}}
            {{--<a class="dropdown-item" href="404.html">404 Page</a>--}}
            {{--<a class="dropdown-item" href="blank.html">Blank Page</a>--}}
        {{--</div>--}}
    {{--</li>--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.firs.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>FIR</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.crime_types.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Types</span></a>
    </li>

    {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="charts.html">--}}
            {{--<i class="fas fa-fw fa-chart-area"></i>--}}
            {{--<span>Lisence</span></a>--}}
    {{--</li>--}}
</ul>