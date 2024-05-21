<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{url('/admin/dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <img style="height:30px; width:30px; filter: invert(100%);" src="{{asset('admin/img/logo.png')}}" alt="{{config('app.name')}}'s logo">
            </div>
            <div class="sidebar-brand-text mx-3">
                <span>{{config('app.name')}}</span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/appointments')}}">
                    <i class="fas fa-user"></i>
                    <span>Appointments</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/messages')}}">
                    <i class="fas fa-user"></i>
                    <span>Messages</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/all_staff')}}">
                    <i class="fas fa-user"></i>
                    <span>Staff</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/reviews')}}">
                    <i class="fas fa-user"></i>
                    <span>Reviews</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/services')}}">
                    <i class="fas fa-user"></i>
                    <span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-user-circle"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" hidden="" method="POST" action="{{route('logout')}}">
                    @csrf
                </form>
            </li>

        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>
