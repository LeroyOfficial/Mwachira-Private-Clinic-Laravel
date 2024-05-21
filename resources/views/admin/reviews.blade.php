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
                    <h3 class="text-dark mb-4">Reviews</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-inline-flex juatify-content-between">
                            <p class="text-primary m-0 fw-bold">Review List</p>
                            <div class="d-none d-md-block col-md-8"></div>
                            <a href="{{url('admin/new_review')}}">
                                <button class="btn btn-primary">Add A New Review</button>
                            </a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table data_table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Review Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td><a href="{{url('admin/review/'.$review->id)}}">
                                                        <img class="rounded-circle me-2" width="30" height="30" src="{{asset('Clients_Pics/'.$review->image)}}">
                                                        {{$review->first_name}}
                                                        {{$review->last_name}}
                                                    </a>
                                                </td>
                                                <td>{{$review->message}}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('Admin.footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>
