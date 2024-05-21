<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="text-center text-white" style="background: url({{asset('assets/img/breadcrumbs.jpg')}}) center / cover no-repeat;padding-top: 30vh;padding-bottom: 10vh;">
        <h1 class="header">About the Clinic</h1>
    </div>

    <div class="section py-5 px-2 px-lg-5 bg-white text-dark">
        <div class="text-center">
            <h1 class="header">Management</h1>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p>A team of expert Staff that are leading our clinic! Meet our staff and visit us for your next problem!</p>
                </div>
                @include('user.staff')
            </div>
        </div>
    </div>
    @include('user.footer')
</body>

</html>
