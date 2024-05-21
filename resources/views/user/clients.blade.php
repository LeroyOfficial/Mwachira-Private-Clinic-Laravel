<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}});padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">Our Clients</h1>
    </div>
    <div class="section py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="text-center">
            <h1 class="header">Our Clients</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p>Here is what our Clients say about us</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            @if ($clientcount > 0)
                @foreach ($clients as $client)
                    <div class="col-sm-6 col-md-3 py-4 text-center">
                        <img class="mb-3" src="{{asset('Client_Pics/'.$client->image)}}">
                        <h4 class="fw-bold">{{$client->first_name}} {{$client->last_name}}</h4>
                        <p>{{$client->review}}</p>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-danger fw-bold">Please Note that this is just a preview.. real details will be shown later once admin adds info</p>
                </div>
                <div class="col-sm-6 col-md-3 py-4 text-center">
                    <img class="mb-3" src="{{asset('assets/img/Clinika-Team01.jpg')}}">
                    <h4 class="fw-bold">Dr Antonio Irving</h4>
                    <span>Cardiologist</span>
                </div>
                <div class="col-sm-6 col-md-3 py-4 text-center">
                    <img class="mb-3" src="{{asset('assets/img/Clinika-Team2.jpg')}}">
                    <h4 class="fw-bold">Dr Antonio Irving</h4>
                    <span>Cardiologist</span>
                </div>
                <div class="col-sm-6 col-md-3 py-4 text-center">
                    <img class="mb-3" src="{{asset('assets/img/Clinika-member-3.jpg')}}">
                    <h4 class="fw-bold">Dr Antonio Irving</h4>
                    <span>Cardiologist</span>
                </div>
                <div class="col-sm-6 col-md-3 py-4 text-center">
                    <img class="mb-3" src="{{asset('assets/img/Clinika-member-5.jpg')}}">
                    <h4 class="fw-bold">Dr Antonio Irving</h4>
                    <span>Cardiologist</span>
                </div>
            @endif
            
            
        </div>
    </div>
    @include('user.footer')
</body>

</html>
