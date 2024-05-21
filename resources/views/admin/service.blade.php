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
                    <h3 class="text-dark mb-4">{{$service->name}} Service</h3>
                    <form method="POST" action="{{url('admin/update_service/'.$service->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                        <img id="img_preview" class="mb-3 mt-4" src="{{asset('Service_Pics'.$service->image)}}" width="160" height="160">
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
                                                <p class="text-primary m-0 fw-bold">Service Details</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="service">
                                                                <strong>Service Name</strong>
                                                            </label>
                                                            <input class="form-control" value="{{$service->name}}" type="text" id="service" required placeholder="Service Name" name="name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="details">
                                                                <strong>Service Details</strong>
                                                            </label>
                                                            <textarea class="form-control" value="{{$service->details}}" name="details" required id="details" style="height: 30vh;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary btn-sm" onclick="return confirm('Are you sure that you want to update this service?')" type="submit">Update Service</button>
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
