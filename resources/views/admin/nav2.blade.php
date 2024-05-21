<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid">
        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
            <i class="fas fa-bars">
            </i>
        </button>
        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">

            </div>
        </form>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown d-sm-none no-arrow">
                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                    <i class="fas fa-search"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                    @if ($unreadAppointsCount > 0)
                        <span class="badge bg-danger badge-counter">{{$unreadAppointsCount}}</span>
                    @endif
                    <i class="fas fa-bell fa-fw">
                    </i>
                </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">Appointments</h6>
                        @if ($unreadAppointsCount > 0)
                            @foreach ($unreadAppoints as $appointment)
                                <a class="dropdown-item d-flex bg-alert align-items-center" href="{{url('admin/appointment/'.$appointment->id)}}">
                                <div class="me-3">
                                    <div class="bg-primary icon-circle">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="small text-gray-500">{{$appointment->created_a}}</span>
                                    <p>{{$appointment->first_name}} {{$appointment->first_name}}</p>
                                </div>
                            </a>
                            @endforeach
                        @endif
                        @foreach ($readAppoints as $appointment)
                                <a class="dropdown-item d-flex align-items-center" href="{{url('admin/appointment/'.$appointment->id)}}">
                                <div class="me-3">
                                    <div class="bg-primary icon-circle">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="small text-gray-500">{{$appointment->created_a}}</span>
                                    <p>{{$appointment->first_name}} {{$appointment->first_name}}</p>
                                </div>
                            </a>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="{{url('/admin/appointments')}}">
                            Show All Appointments
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                    @if ($unreadMessageCount > 0)
                        <span class="badge bg-danger badge-counter">{{$unreadMessageCount}}</span>
                    @endif
                    <i class="fas fa-envelope fa-fw">
                    </i>
                </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">Messages</h6>
                        @if ($unreadMessageCount > 0)
                            @foreach ($unreadMessages as $message)
                                <a class="dropdown-item d-flex bg-alert align-items-center" href="{{url('admin/message/'.$message->id)}}">
                                    <div class="dropdown-list-image me-3">
                                        <img class="rounded-circle" src="{{asset('admin/img/avatars/avatar4.jpeg')}}">
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate">
                                            <span>{{$message->message}}</span>
                                        </div>
                                        <p class="small text-gray-500 mb-0">{{$message->first_name}} {{$message->first_name}}
                                            -
                                            @php
                                                $createdAt = \Carbon\Carbon::parse($message->created_at);
                                                $now = \Carbon\Carbon::now();
                                                $diffInMinutes = $now->diffInMinutes($createdAt);
                                                if ($diffInMinutes < 60) {
                                                    $output = $diffInMinutes . 'm';
                                                } else {
                                                    $diffInHours = $now->diffInHours($createdAt);
                                                    if ($diffInHours < 24) {
                                                        $output = $diffInHours . 'h';
                                                    } else {
                                                        $diffInDays = $now->diffInDays($createdAt);
                                                        if ($diffInDays < 7) {
                                                            $output = $diffInDays . 'd';
                                                        } else {
                                                            $output = $createdAt->format('n-j-Y');
                                                        }
                                                    }
                                                }
                                                echo $output;
                                            @endphp
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        @endif

                        @foreach ($readMessages as $message)
                            <a class="dropdown-item d-flex align-items-center" href="{{url('admin/message/'.$message->id)}}">
                                <div class="dropdown-list-image me-3">
                                    <img class="rounded-circle" src="{{asset('admin/img/avatars/avatar4.jpeg')}}">
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate">
                                        <span>{{$message->message}}</span>
                                    </div>
                                    <p class="small text-gray-500 mb-0">{{$message->first_name}} {{$message->first_name}}
                                        -
                                        @php
                                            $createdAt = \Carbon\Carbon::parse($message->created_at);
                                            $now = \Carbon\Carbon::now();
                                            $diffInMinutes = $now->diffInMinutes($createdAt);
                                            if ($diffInMinutes < 60) {
                                                $output = $diffInMinutes . 'm';
                                            } else {
                                                $diffInHours = $now->diffInHours($createdAt);
                                                if ($diffInHours < 24) {
                                                    $output = $diffInHours . 'h';
                                                } else {
                                                    $diffInDays = $now->diffInDays($createdAt);
                                                    if ($diffInDays < 7) {
                                                        $output = $diffInDays . 'd';
                                                    } else {
                                                        $output = $createdAt->format('n-j-Y');
                                                    }
                                                }
                                            }
                                            echo $output;
                                        @endphp
                                    </p>
                                </div>
                            </a>
                        @endforeach

                        <a class="dropdown-item text-center small text-gray-500" href="{{url('admin/messages')}}">Show All Messages</a>
                    </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown">

                </div>
            </li>
            <div class="d-none d-sm-block topbar-divider">

            </div>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-none d-lg-inline me-2 text-gray-600 small">{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                        <a class="dropdown-item" href="{{url('user/profile')}}">
                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400">

                            </i>
                            &nbsp;Profile
                        </a>

                        <div class="dropdown-divider">

                        </div>

                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400">
                                </i>&nbsp;Logout
                            </a>

                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-user-circle">

                            </i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
