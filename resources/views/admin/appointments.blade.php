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
                    <h3 class="text-dark mb-4">Appointments</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-inline-flex juatify-content-between">
                            <p class="text-primary m-0 fw-bold">Appointment List</p>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table data_table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td>
                                                    <a href="{{url('admin/appointment/'.$appointment->id)}}">
                                                        {{$appointment->first_name}} {{$appointment->last_name}}
                                                    </a>
                                                </td>
                                                <td>{{$appointment->phone}}</td>
                                                <td>{{$appointment->email}}</td>
                                                <td>{{$appointment->date}}</td>
                                                <td>{{$appointment->time}}</td>
                                                <td class="text-truncate">{{$appointment->reason}}</td>
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
