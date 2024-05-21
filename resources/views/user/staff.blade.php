<div class="row justify-content-center py-5">
    @if ($staffcount > 0)
        @foreach ($staff as $staff)
            <div class="col-sm-6 col-md-3 py-4 text-center">
                <img class="mb-3" src="{{asset('Staff_Pics/'.$staff->image)}}">
                <h4 class="fw-bold">{{$staff->first_name}} {{$staff->last_name}}</h4>
                <span>{{$staff->position}}</span>
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