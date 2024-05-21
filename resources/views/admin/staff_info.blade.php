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
                    <h3 class="text-dark mb-4">{{$staff->first_name}} {{$staff->last_name}}'s Details</h3>
                    <form method="POST" action="{{url('admin/update_staff/'.$staff->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                        <img id="img_preview" class="mb-3 mt-4" src="{{asset('Staff_Pics'.$appointment->image)}}" width="160" height="160">
                                        <input class="my-4" style="display:none;" type="file" name="image" id="img_input" accept="image/*" required>
                                        <div class="mb-3">
                                            <button id="img_btn" class="btn btn-primary btn-sm" type="button">Change Photo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Staff Member Details</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="first_name">
                                                                <strong>First Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="first_name" value="{{$staff->first_name}}" required placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="last_name">
                                                                <strong>Last Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="last_name" value="{{$staff->last_name}}" required placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="position">
                                                                <strong>Position</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="position" value="{{$staff->position}}" required placeholder="Position" name="position">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary btn-sm" onclick="return confirm('Are you sure that you want to update this staff member details?')" type="submit">Update Staff Member Details</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
