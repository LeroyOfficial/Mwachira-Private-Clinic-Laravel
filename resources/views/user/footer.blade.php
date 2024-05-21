<footer class="row pt-5 pb-2 px-2 px-lg-5 bg-white text-white" style="background: url(&quot;assets/img/Clinika-Service_bg-scaled.jpg&quot;) center / cover no-repeat;">
    <div class="col-sm-6 col-md-3">
        <p>We are the leading health care service provider in Lunzu township and surrounding communities.</p>
    </div>
    <div class="col-sm-6 col-md-3">
        <h4 class="mb-4 fw-bold">Quick Links</h4>
        <ul class="list-unstyled">
            <li>
                <a href="{{url('/who_we_are')}}">About Us</a>
            </li>
            <li>
                <a href="{{url('/services')}}">Our Services</a>
            </li>
            <li>
                <a href="{{url('/clients')}}">Our Clients</a>
            </li>
            <li>
                <a href="{{url('/contact')}}">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="col-sm-6 col-md-3">
        <h4 class="mb-4 fw-bold">Contact Us</h4>
        <ul class="list-unstyled fs-5">
            <li>
                <i class="fas fa-map-marker-alt me-2"></i>
                <span>Lunzu, Blantyre</span>
            </li>
            <li>
                <a href="tel:{{$info->where('name','phone_number')->value('details')}}">
                    <i class="fas fa-phone-alt me-2"></i>
                    <span>{{$info->where('name','phone_number')->value('details')}}</span>
                </a>

            </li>
            <li>
                <a href="mailto:{{$info->where('name','email_address_1')->value('details')}}">
                    <i class="fas fa-envelope me-2"></i>
                    <span>{{$info->where('name','email_address_1')->value('details')}}</span>
                </a>
            </li>
            <li>
                <a href="mailto:{{$info->where('name','email_address_2')->value('details')}}">
                    <i class="fas fa-envelope me-2"></i>
                    <span>{{$info->where('name','email_address_2')->value('details')}}</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-sm-6 col-md-3"></div>
    <div class="col-12 d-flex justify-content-between mt-5">
        <img src="assets/img/logo.png" style="filter: invert(100%);max-width: 20vw;">
        <span class="float-end">{{ date('Y') }} © {{config('app.name')}} by
            <a href="https:\\www.xerxes-inc.com">Xerxes Inc</a>
            . All rights Reserved.</span>
        </div>
</footer>

<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
<script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>
