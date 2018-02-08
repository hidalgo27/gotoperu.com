<!-- Modal -->
<div class="modal right  fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--<div class="modal-header">--}}
            {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
            {{--</div>--}}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="img-fluid">
                <div class="row mt-5">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="{{route('packages_path')}}" class="text-secondary h5"><strong>Travel Packages</strong></a></li>
                            <li><a href="#" class="text-secondary h5 popover-focus" data-toggle="popover" data-placement="left" title="<h4 class='text-secondary'>Destinations</h4>" data-content="
                                <ul class='list-unstyled'>
                                    <li><a href='{{route('destinations_country_path', 'peru-travel')}}' class='text-secondary h5'>Peru</a></li>
                                    <li><a href='{{route('destinations_country_path', 'ecuador-travel')}}' class='text-secondary h5'>Ecuador</a></li>
                                    <li><a href='{{route('destinations_country_path', 'bolivia-travel')}}' class='text-secondary h5'>Bolivia</a></li>
                                    <li><a href='{{route('destinations_country_path', 'brasil-travel')}}' class='text-secondary h5'>Brazil</a></li>
                                </ul>
                                "><strong>Destinations</strong></a></li>
                            <li><a href="{{route('getting_path')}}" class="text-secondary h5"><strong>Getting To Peru</strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col">
                        <ul class="list-unstyled">
                            {{--<li><a href="#" class="text-secondary h5"><strong>Travel Agents</strong></a></li>--}}
                            {{--<li><a href="#" class="text-secondary h5"><strong>Our Blog</strong></a></li>--}}
                            <li><a href="{{route('hotels_path')}}" class="text-secondary h5"><strong>Hotels</strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="" class="text-primary h5"><strong>Sign In <i class="fa fa-sign-in"></i></strong></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col">
                        <a href="https://m.me/GOTOPERUcom/" class="btn btn-primary" target="_blank">Chat Facebook</a>
                        <a href="https://api.whatsapp.com/send?phone=51084262555" class="btn btn-success" target="_blank">Chat Twitter</a>
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