<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}});padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">Contact Us</h1>
    </div>
    <div class="section row py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="col-md-6">
            <div class="row pb-5">
                <div class="col-md-6 d-flex py-4 px-2">
                    <div>
                        <i class="fas fa-phone-alt text-white text-center bg-primary me-3 p-4" style="border-radius: 50%;font-size: 30px;"></i>
                    </div>
                    <span class="d-flex flex-column">
                        <span class="fw-bold">PHONE NUMBER</span>
                        <span><a href="tel:{{$info->where('name','phone_number')->value('details')}}">{{$info->where('name','phone_number')->value('details')}}</a></span>
                    </span>
                </div>
                <div class="col-md-6 d-flex py-4 px-2">
                    <div>
                        <i class="far fa-envelope text-white text-center bg-primary me-3 p-4" style="border-radius: 50%;font-size: 30px;"></i>
                    </div>
                    <span class="d-flex flex-column">
                        <span class="fw-bold">EMAIL ADDRESS</span>
                        <span>
                            <a href="mailto:{{$info->where('name','email_address_1')->value('details')}}">{{$info->where('name','email_address_1')->value('details')}}</a>
                        </span>
                        <span>
                            <a href="mailto:{{$info->where('name','email_address_2')->value('details')}}">{{$info->where('name','email_address_2')->value('details')}}</a>
                        </span>
                    </span>
                </div>
                <div class="col-md-6 d-flex py-4 px-2">
                    <div>
                        <i class="far fa-clock text-white text-center bg-primary me-3 p-4" style="border-radius: 50%;font-size: 30px;"></i>
                    </div>
                    <span class="d-flex flex-column">
                        <span class="fw-bold">LOCATION</span>
                        <span><a href="">Lunzu, Blantyre</a></span>
                    </span>
                </div>
                <div class="col-md-6 d-flex py-4 px-2">
                    <div>
                        <i class="far fa-clock text-white text-center bg-primary me-3 p-4" style="border-radius: 50%;font-size: 30px;"></i>
                    </div>
                    <span class="d-flex flex-column">
                        <span class="fw-bold">SCHEDULE</span>
                        <span>Open 24/7</span>
                    </span>
                </div>
            </div>
            <div>
                <img src="{{asset('assets/img/contact-768x417.png')}}"></div>
        </div>
        <div class="col-md-6">
            <form class="px-4" method="POST" action="{{url('/new_contact')}}">
                @csrf
                <h4 class="text-center py-5 fw-bold">Send us a message</h4>
                @include('user.message_N_error')
                <input class="form-control mb-4 rounded-pill" type="text" name="fname" placeholder="First name" required="">
                <input class="form-control mb-4 rounded-pill" type="text" name="lname" placeholder="Last name" required="">
                <input class="form-control mb-4 rounded-pill" type="text" required="" name="phone" placeholder="Phone">
                <input class="form-control mb-4 rounded-pill" type="email" required="" name="email" placeholder="Email">
                <textarea class="form-control mb-4" gstyle="height: 20vh;border-radius: 20px;" style="border-radius: 20px;height: 30vh;" name="message" placeholder="Your Message" required=""></textarea>
                <div class="text-center">
                    <button class="btn btn-primary rounded-circle p-4" type="submit">
                        <i class="fab fa-telegram-plane fs-3"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('user.footer')
</body>

</html>
