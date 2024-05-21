<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')

    <div class="section row py-5 px-2 px-lg-4 text-white" style="background: url({{asset('assets/img/bg_slider.jpg')}}) center / cover no-repeat, var(--bs-cyan);">
        <div class="col-md-6 text-center d-flex justify-content-center align-items-center align-content-center pt-5 pt-lg-0">
            <div class="text-start py-5 p-lg-0">
                <h1 class="header" style="font-size: 6vw;font-family: Jost, sans-serif;">Welcome To<br>Mwachira</h1>
                <p>We are the leading health care service provider in Lunzu township and surrounding communities.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/img/nurse_doctor_2-1.png')}}">
        </div>
    </div>
    <div class="section row py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="col-md-6">
            <img src="{{asset('assets/img/home_img_wrap.png')}}">
        </div>
        <div class="col-md-6">
            <h1 class="mb-4 header">Mwachira - Best Medical Clinic, with many specialities for most diagnostic.</h1>
            <p class="mb-4">Our state-of-the-art facilities and highly trained staff provide unparalleled care and support for all of your healthcare needs. From routine check-ups to complex procedures, we are dedicated to helping you achieve optimal health and wellness.</p>
            <a href="{{url('/services')}}" class="btn btn-primary py-2 px-4" role="button" style="border-radius: 20px;">Browse through diagnostic</a>
        </div>
    </div>
    <div class="section row py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="col-md-6">
            <h1 class="header">Specialized medical checkup tailored to the patient</h1>
            <div id="service_list" class="row">
                <div id="service-1" class="col-6 py-4">
                    <img src="{{asset('assets/img/Clinka-service-1.png')}}" style="max-width: 60px;">
                    <h4 class="fw-bold">All medical facility</h4>
                </div>
                <div id="service-2" class="col-6 py-4">
                    <img src="{{asset('assets/img/Clinka-service-2.png')}}" style="max-width: 60px;">
                    <h4 class="fw-bold">Lowest fees in city</h4>
                </div>
                <div id="service-3" class="col-6 py-4">
                    <img src="{{asset('assets/img/Clinika-service-3.png')}}" style="max-width: 60px;">
                    <h4 class="fw-bold">Experienced Doctor</h4>
                </div>
                <div id="service-4" class="col-6 py-4">
                    <img src="{{asset('assets/img/Clinka-service-4.png')}}" style="max-width: 60px;">
                    <h4 class="fw-bold">5000+ Happy Patient</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/img/Clinika-bebeftis-image-1-768x801.png')}}">
        </div>
    </div>

    <div class="section service_list row py-5 px-2 px-lg-5 bg-white text-white justify-content-center" style="background: url({{asset('assets/img/Clinika-Service_bg-scaled.jpg')}}) center / cover no-repeat;">
        <div class="col-12 text-center pb-5">
            <h1 class="header mb-4">Services Provided By Mwachira</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p>Here are some of the servicees offered at Mwachira</p>
                </div>
            </div>
        </div>
        @if ($serviceCount > 0)
            @foreach ($services as $service)
                <div class="service col-md-4 py-4 overflow-hidden">
                    <div class="bg-white text-dark text-center py-5 px-5" style="box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);border-radius: 20px;">
                        <img class="mb-2" src="{{asset('Service_Pics/'.$service->image)}}" style="max-width: 96px;">
                        <h4 class="text-capitalize fw-bold">{{$service->name}}</h4>
                        <p class="text-truncate">{{$service->details}}</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/clinika_medical-500x.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Blood Tests</h4>
                    <p class="text-truncate" style="height:20px;">Primary care services focus on general health and wellness, including check-ups, preventive care, and treatment of common illnesses. This type of care is typically provided by a family physician or general practitioner who can help manage ongoing health concerns and coordinate any necessary referrals to specialists.</p>
                </div>
            </div>
            <div class="col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/Teeth-Whitening-500x.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Teeth Whitening</h4>
                    <p class="text-truncate">Capitalize on low hanging fruit to identify a ...</p>
                </div>
            </div>
            <div class="col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/STD_Examination-500x500.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Blood Tests</h4>
                    <p class="text-truncate">Taking seamless key indicators to the long tail. .</p>
                </div>
            </div>
        @endif

        <div class="col-12 text-center py-5">
            <a href="{{url('/services')}}" class="btn btn-primary py-2 px-4" role="button" style="border-radius: 20px;">View All Services</a>
        </div>
    </div>
    <div class="section py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="text-center">
            <h1 class="header">Our experienced Staff</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <p>A team of expert Staff that are leading our clinic! Meet our staff and visit us for your next problem!</p>
                </div>
            </div>
        </div>
        @include('user.staff')
        <div class="col-12 text-center py-4">
            <a href="{{url('/management')}}" class="btn btn-primary py-2 px-4" role="button" style="border-radius: 20px;">View All Staff</a>
        </div>
    </div>
    @include('user.footer')
</body>

</html>
