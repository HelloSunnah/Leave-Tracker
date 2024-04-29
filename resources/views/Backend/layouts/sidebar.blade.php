<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @if(Auth::user()->role==1)
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('employees.index') }}">
                <i class="bi bi-grid"></i>
                <span>Employee List</span>
            </a>
        </li>
        <a class="nav-link " href="{{ route('leave.request.list') }}">
            <i class="bi bi-grid"></i>
            <span>Employee Leave Request</span>
        </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('leave.request')}}">
                <i class="bi bi-grid"></i>
                <span>Make a Request </span>
            </a>
        </li>
        @endif


    </ul>

</aside>