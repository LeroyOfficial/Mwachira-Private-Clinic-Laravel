<nav class="pb-2 fixed-top" style="background: rgba(0,0,0,0.3);">
    <div id="top_div" class="col-12 d-flex justify-content-around fw-bold py-1 text-white mb-2">
        <span>
            <span class="me-1">Address:</span>
            <span>Lunzu, Blantyre, Malawi </span>
        </span>
        <span>
            <span class="me-1">Phone Numbers:</span>
            <span>{{$info->where('name','phone_number')->value('details')}}</span>
        </span>
    </div>
    <div class="row px-2 px-lg-4 text-white">
        <div class="col-9 col-sm-10 col-lg-3">
            <a class="d-inline-flex" href="{{url('/')}}">
                <img class="me-1" src="{{asset('assets/img/logo.png')}}" style="filter: invert(100%);">
            </a>
        </div>
        <div class="col-lg-9 d-none d-lg-block">
            <div class="row">
                <div class="col-8">
                    <ul class="list-unstyled d-inline-flex fw-bold fs-5 text-capitalize pt-1">
                        <li class="mx-2">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="mx-2 ">
                            <div class="dropdown p-0 m-0">
                                <button class="btn dropdown-toggle fw-bold p-0 m-0 fs-5 text-white" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                                    About
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/who_we_are')}}">Who We Are</a>
                                    <a class="dropdown-item" href="{{url('/management')}}">Management</a>
                                </div>
                            </div>
                        </li>
                        <li class="mx-2">
                            <a href="{{url('/services')}}">Services</a>
                        </li>
                        <li class="mx-2">
                            <a href="{{url('/clients')}}">Clients</a>
                        </li>
                        <li class="mx-2">
                            <a href="{{url('/contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-end">
                    <a class="btn btn-light fw-bold py-2 px-4" role="button" href="{{url('/appointment')}}" style="border-radius: 20px;">Appointment</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-sm-2 d-block d-lg-none pt-2">
            <div class="dropdown">
                <button class="btn dropdown-toggle fs-2 text-white" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/who_we_are')}}">Who We Are</a>
                    <a class="dropdown-item" href="{{url('/management')}}">Management</a>
                    <a class="dropdown-item" href="{{url('/services')}}">Services</a>
                    <a class="dropdown-item" href="{{url('/clients')}}">Clients</a>
                    <a class="dropdown-item" href="{{url('/contact')}}">Contact Us</a>
                    <a class="dropdown-item" href="{{url('/appointment')}}">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</nav>
