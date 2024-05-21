<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}});padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">Appointment Booking</h1>
    </div>
    <div class="section row justify-content-center py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="col-md-7 py-4" style="border-radius: 20px;box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);">
            <form class="px-4" method="post" action="{{url('/post_appointment')}}">
                @csrf
                <h4 class="text-start py-3 text-primary px-2">Book a slot</h4>
                @include('user.message_N_error')
                <h5 class="text-start pb-4 text-dark px-2">When do you want to come?</h5>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control mb-4 rounded-pill" type="text" name="fname" placeholder="First name" required="">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-4 rounded-pill" type="text" name="lname" placeholder="Last name" required="">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-4 rounded-pill" type="text" name="phone" placeholder="Phone Number" required="">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-4 rounded-pill" type="email" name="email" placeholder="Email Address" required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">select a day</label>
                        <input id="appointment_date_input" name="date" class="form-control mb-4 rounded-pill" type="date" required="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">select an hour</label>
                        <input class="form-control mb-4 rounded-pill" name="time" type="time" required="">
                    </div>
                </div>
                <textarea class="form-control mb-4" style="border-radius: 20px;height: 30vh;" name="reason" placeholder="Reason for Appointment" required=""></textarea>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Book Appointment</button></div>
            </form>
        </div>
    </div>
    @include('user.footer')

    <script>
        $(document).ready(function() {
            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            var minDate = tomorrow.toISOString().substring(0, 10);
            $('#appointment_date_input').attr('min', minDate);
            });
    </script>
</body>

</html>
