<!-- Modal -->
<div class="modal right  fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--<div class="modal-header">--}}
            {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
            {{--</div>--}}
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="img-fluid">
                <div class="row mt-3">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="{{route('packages_path')}}" class="text-secondary h5"><strong>Travel Packages</strong></a></li>
                            {{--<li><a href="#" class="text-secondary h5 popover-focus" data-toggle="popover" data-placement="left" title="<h4 class='text-secondary'>Destinations</h4>" data-content="--}}
                                {{--<ul class='list-unstyled'>--}}
                                    {{--<li><a href='{{route('destinations_path')}}' class='text-secondary h5'>Peru</a></li>--}}
                                    {{--<li><a href='{{route('destinations_country_path', 'ecuador-travel')}}' class='text-secondary h5'>Ecuador</a></li>--}}
                                    {{--<li><a href='{{route('destinations_country_path', 'bolivia-travel')}}' class='text-secondary h5'>Bolivia</a></li>--}}
                                    {{--<li><a href='{{route('destinations_country_path', 'brasil-travel')}}' class='text-secondary h5'>Brazil</a></li>--}}
                                {{--</ul>--}}
                                {{--"><strong>Destinations</strong></a></li>--}}
                            <li><a href="{{route('destinations_path')}}" class="text-secondary h5"><strong>Destinations</strong></a></li>
                            <li><a href="{{route('testimonials_path')}}" class="text-secondary h5"><strong>Testimonials</strong></a></li>
                            <li><a href="{{route('hotels_path')}}" class="text-secondary h5"><strong>Hotels</strong></a></li>
                            <li><a href="{{route('faq_path')}}" class="text-secondary h5"><strong>FAQ</strong></a></li>
                            <li><a href="{{route('about_path')}}" class="text-secondary h5"><strong>About Us</strong></a></li>
                            <li><a href="{{route('contact_us_path')}}" class="text-secondary h5"><strong>Contact Us</strong></a></li>
                            <li><a href="{{route('agents_path')}}" class="text-secondary h5"><strong>Travel Agents</strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="mt-0">
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled m-0">
                            {{--<li><a href="#" class="text-secondary h5"><strong>Travel Agents</strong></a></li>--}}
                            {{--<li><a href="#" class="text-secondary h5"><strong>Our Blog</strong></a></li>--}}
                            <li><a href="{{route('join_path')}}" class="text-secondary h5"><strong>Join Our Team</strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col">
                        <ul class="list-unstyled m-0">
                            <li><a href="http://sistema.gotoperu.com.pe/" class="text-primary h5"><strong>Team Login <i class="fa fa-sign-in-alt"></i></strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                {{--<div class="row mt-2">--}}
                    {{--<div class="col">--}}
                        {{--<p class="h5 text-secondary">We are a proud local  Expedia Peru Partner</p>--}}
                        {{--<a href="https://www.expedia.com/" target="_blank"><img src="{{asset('images/logos/expedia.jpg')}}" alt="" class="img-fluid"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<hr>--}}
                <div class="row no-gutters">
                    <div class="col">
                        <a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline" target="_blank">
                            <i class="fab fa-facebook text-primary fa-2x"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://twitter.com/GOTOPERUCOM" class="d-inline" target="_blank">
                            <i class="fab fa-twitter text-info fa-2x"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.instagram.com/gotoperucom/" class="d-inline" target="_blank">
                            <i class="fab fa-instagram text-g-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" class="d-inline" target="_blank">
                            <i class="fab fa-youtube text-danger fa-2x"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://plus.google.com/+Gotoperu" class="d-inline" target="_blank">
                            <i class="fab fa-google-plus text-danger fa-2x"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col">
                        <a href="https://m.me/GOTOPERUcom/" class="btn btn-primary" target="_blank"><i class="fab fa-facebook-messenger"></i> Messenger</a>
                        <a href="https://api.whatsapp.com/send?phone=19294807000" class="btn btn-success" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>