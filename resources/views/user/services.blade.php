<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}});padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">Services Provided By Mwachira</h1>
    </div>
    <div class="section py-4 px-2 px-lg-5 bg-white text-dark">
        <div id="service_list" class="row">
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
            <div class="service col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/clinika_medical-500x.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Blood Tests</h4>
                    <p class="text-truncate" style="height:20px;">Primary care services focus on general health and wellness, including check-ups, preventive care, and treatment of common illnesses. This type of care is typically provided by a family physician or general practitioner who can help manage ongoing health concerns and coordinate any necessary referrals to specialists.</p>
                </div>
            </div>
            <div class="service col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/Teeth-Whitening-500x.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Teeth Whitening</h4>
                    <p class="text-truncate">Capitalize on low hanging fruit to identify a ...</p>
                </div>
            </div>
            <div class="service col-md-4 py-4 overflow-hidden">
                <div class="bg-white text-dark text-center py-5 px-5" style="border-radius: 20px;">
                    <img class="mb-2" src="{{asset('assets/img/STD_Examination-500x500.png')}}" style="max-width: 96px;">
                    <h4 class="text-capitalize fw-bold">Blood Tests</h4>
                    <p class="text-truncate">Taking seamless key indicators to the long tail. .</p>
                </div>
            </div>
        @endif
        </div>
    </div>
    @include('user.footer')

    <script src="{{asset ('assets/js/services.js')}}"></script>
</body>

</html>
