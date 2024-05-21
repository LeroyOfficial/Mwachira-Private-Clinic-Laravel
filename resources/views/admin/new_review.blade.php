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
                    <h3 class="text-dark mb-4"> Add a New Review</h3>
                    <form method="POST" action="{{url('admin/post_review')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="card mb-3">
                                    <div class="card-body text-center shadow">
                                        <img id="img_preview" style="display:none;" class="mb-3 mt-4" src="" width="160" height="160">
                                        <input class="my-4" type="file" name="image" id="img_input" accept="image/*" required>
                                        <div class="mb-3">
                                            <button id="img_btn" class="btn btn-primary btn-sm" type="button">Add Photo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Review Details</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="fname">
                                                                <strong>First Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="fname" required placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="lname">
                                                                <strong>Last Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="lname" required placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="details">
                                                                <strong>Review Message</strong>
                                                            </label>
                                                            <textarea class="form-control" name="message" required id="details" style="height: 30vh;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary btn-sm" type="submit">Add Review</button>
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
