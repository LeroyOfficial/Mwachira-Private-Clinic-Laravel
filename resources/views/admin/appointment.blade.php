<!DOCTYPE html>
<html>

<head>
    @include('Admin.css')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('Admin.nav')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('Admin.nav2')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">{{$appointment->first_name}}'s Appointment</h3>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                        <img id="img_preview" class="mb-3 mt-4" src="{{asset('Service_Pics'.$appointment->image)}}" width="160" height="160">
                                        <div class="mb-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Appointment Details</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="fname">
                                                                <strong>First Name</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->first_name}}" type="text" id="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="lname">
                                                                <strong>Last Name</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->last_name}}" type="text" id="lname">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="phone">
                                                                <strong>Phone Number</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->phone}}" type="text" id="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email">
                                                                <strong>Email Address</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->email}}" type="text" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="date">
                                                                <strong>Date</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->date}}" type="text" id="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="time">
                                                                <strong>Time</strong>
                                                            </label>
                                                            <input class="form-control" readonly value="{{$appointment->time}}" type="text" id="time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="details">
                                                                <strong>Appointment Reason</strong>
                                                            </label>
                                                            <textarea class="form-control" name="details" readonly id="details" style="height: 30vh;">{{$appointment->reason}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @include('Admin.footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script>
        $(document).ready(function() {
            $('#img_btn').click(function(){
                $('#img_input').trigger('click');
            });

            $('#img_input').change(function(){
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img_input').hide();
                        $('#img_preview').show();
                        $('#img_preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>

</body>

</html>
