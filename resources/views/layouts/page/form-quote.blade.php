<section class="d-none d-xl-block">
    <div class="jumbotron jumbotron-divider-1 rounded-0 m-0">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-9 text-white text-center rounded">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100">
                            <small>Assistances</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100">
                            <small>Breakfast</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100">
                            <small>Entrances</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100">
                            <small>Flight</small>
                        </div>

                        <div class="col">
                            <img src="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100">
                            <small>Hotels</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100">
                            <small>Tours</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100">
                            <small>Trains</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="w-100">
                            <small>Transfers</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{--<section class="bg-white">--}}
{{--<div class="container-fluid">--}}
{{--<div class="row py-5 ">--}}
{{--<div class="col-6">--}}
{{--<div class="row">--}}
{{--<div class="col-3">--}}
{{--<img src="{{asset('images/icons/contact.png')}}" alt="" class="img-fluid img-circle">--}}
{{--</div>--}}
{{--<div class="col">--}}
{{--<h4>CONTACT</h4>--}}
{{--<p>Chat with us, give us a call (813)600-3042, send us an e-mail or fill out our online form. Share with us your travel preferences! If you already have an outline, an idea, any questions… we will be more than happy to assist your needs.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-3">--}}
{{--<img src="{{asset('images/icons/design.png')}}" alt="" class="img-fluid img-circle">--}}
{{--</div>--}}
{{--<div class="col">--}}
{{--<h4>DESIGN</h4>--}}
{{--<p>We will craft out a first travel proposal according to the outline or idea that you shared with us. From then on we will customize it until you are satisfied with the planning! We will then send you a day by day itinerary and leave the rest to you!</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-3">--}}
{{--<img src="{{asset('images/icons/vacations.png')}}" alt="" class="img-fluid img-circle">--}}
{{--</div>--}}
{{--<div class="col">--}}
{{--<h4>VACATION</h4>--}}
{{--<p>Be ready for an unforgettable vacation to the land of the Incas, with promptly transfers at every point (airports, hotels, buses,trains) with knowledgable local Guides on each destination plus the best hotel locations and perks...GOTOPERU team will be always with you</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

<section class="bg-light" id="Inquire">
    <div class="container">
        <div class="row py-5 justify-content-center">

            <div class="col">
                <div class="row justify-content-center pb-2">
                    <div class="col col-sm-12">
                        <h2 class="text-g-green text-center"><strong>TRAVEL INQUIRE</strong></h2>
                        <h5 class="text-secondary text-center">Help us design your perfect Peru vacation & Receive in 24hrs the first itineraries & quotes.</h5>
                        <hr>
                    </div>
                </div>
                <form id="h_form" role="form">
                <div id="rootwizard">
                    <div class="navbar d-none">
                        <div class="navbar-inner">
                            <div class="container">
                                <ul>
                                    <li><a href="#tab1" data-toggle="tab">First</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Second</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab1">

                                {{csrf_field()}}
                            <div class="row justify-content-center">
                                <div class="col col-sm-12">

                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="row pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>HOTEL CATEGORY</strong></h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                    <div class="btn-group-toggle" data-toggle="buttons">
                                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                        {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                                        <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Budget
                                                            <div class="d-block">
                                                                <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            </div>
                                                            {{--<div class="d-block text-center sec-stars">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--</div>--}}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                    <div class="btn-group-toggle" data-toggle="buttons">
                                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                        {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                                        <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                                            <div class="d-block">
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            </div>
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<div class="d-block text-center sec-stars">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--</div>--}}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                    <div class="btn-group-toggle" data-toggle="buttons">
                                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                        {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                        <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                                            <div class="d-block">
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                    <div class="btn-group-toggle" data-toggle="buttons">
                                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                        {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                        <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                                            <div class="d-block">
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            <small><i class="fa fa-star text-g-yellow"></i></small>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4 pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>DESTINATIONS</strong></h2>
                                                </div>
                                            </div>

                                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                <label class="col-6 col-sm col-md-6 col-lg btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Lima">
                                                    {{--<img src="{{asset('images/destinations/destinations/lima.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    Lima
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Cusco">
                                                    {{--<img src="{{asset('images/destinations/destinations/cusco.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    Cusco
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Machu Pichu">
                                                    {{--<img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    Machu Picchu
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Sacred Valley">
                                                    {{--<img src="{{asset('images/destinations/destinations/sacred-valley.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    Sacred Valley
                                                </label>
                                            </div>

                                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                <label class="col-6 col-sm col-md-6 col-xl mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Lake Titicaca">
                                                    {{--<img src="{{asset('images/destinations/destinations/puno-and-lake-titicaca.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    Lake Titicaca
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-xl mx-sm-2 mx-md-0 mx-xl-2 mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Nazca & Ballestas">
                                                    {{--<img src="{{asset('images/destinations/destinations/nazca-lines.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    <small>Nazca & Ballestas</small>
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-xl mx-sm-2 mx-md-0 btn btn-outline-secondary text-secondary number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Amazon">
                                                    {{--<img src="{{asset('images/destinations/destinations/amazon.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    <small>Amazon</small>
                                                </label>
                                                <label class="col-6 col-sm col-md-6 col-xl ml-sm-2 mx-md-0 ml-xl-2 btn btn-outline-secondary text-secondary number-hover">
                                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Arequipa & Colca">
                                                    {{--<img src="{{asset('images/destinations/destinations/arequipa-&-colca-canyon.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                    <small>Arequipa & Colca</small>
                                                </label>
                                            </div>



                                            <div class="row mt-4 pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS</strong></h2>
                                                </div>
                                            </div>

                                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                <label class="btn col btn-outline-secondary number-hover number_ch">
                                                    <input type="radio" name="number" class="number" autocomplete="off" value="1"> 1 <i class="fa fa-male"></i>
                                                </label>
                                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                    <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                                </label>
                                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                    <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                                </label>
                                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                    <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                                </label>
                                                <label class="btn col btn-outline-secondary number-hover number_ch">
                                                    <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                                </label>
                                                <div class="col input-group ml-2">
                                                    <input type="number" class="form-control number" name="number" id="h_number" placeholder="" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado2()">
                                                </div>

                                            </div>

                                            <div class="row mt-4 pb-2">
                                                <div class="col">
                                                    <h2 class="text-secondary h5"><strong>TRIP LENGTH</strong></h2>
                                                </div>
                                            </div>

                                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0  mb-md-2 btn-outline-secondary duration_ch number-hover">
                                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="3-5" checked> 3-5 <small><i class="text-g-yellow">Days</i></small></i>
                                                </label>
                                                <label class="btn col-4 col-sm col-md-4 col-xl mx-sm-2 mx-xl-2 mx-md-0 mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover">
                                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="6-8"> 6-8 <small><i class="text-g-yellow">Days</i></small></i>
                                                </label>
                                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover">
                                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="9-11"> 9-11 <small><i class="text-g-yellow">Days</i></small></i>
                                                </label>
                                                <label class="btn col-4 col-sm col-md-4 col-xl mx-sm-2 mx-xl-2 mx-md-0 btn-outline-secondary duration_ch number-hover">
                                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="12-15"> 12-15 <small><i class="text-g-yellow">Days</i></small></i>
                                                </label>
                                                <label class="btn col-4 col-sm col-md-4 col-xl btn-outline-secondary duration_ch number-hover">
                                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="16+"> 16+ <small><i class="text-g-yellow">Days</i></small></i>
                                                </label>
                                                <div class="col-4 col-sm col-md-4 col-xl input-group ml-sm-2 ml-md-0 ml-xl-2">
                                                    <input type="number" class="form-control duration" name="duration" id="h_duration" placeholder="" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md mt-4 mt-md-0">
                                            <div class="row justify-content-center">
                                                <div class="col col-sm-12 col-md-12">

                                                            <div class="row pb-2">
                                                                <div class="col">
                                                                    <h2 class="text-secondary h5"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group input-group-lg">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="h_name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row pb-2 mt-4">
                                                                <div class="col">
                                                                    <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group input-group-lg">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                                        </div>
                                                                        <input type="email" class="form-control" id="h_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                    <div class="row mt-4 pb-1">
                                                        <div class="col-12 col-sm col-md-12 col-lg-6">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h2 class="text-secondary h5"><strong>TRAVEL DATE</strong></h2>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group input-group-lg">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="h_date" placeholder="Fecha de Viaje" aria-label="Username" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h2 class="text-secondary h5"><strong>PHONE NUMBER</strong></h2>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group input-group-lg">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                                        </div>
                                                                        <input type="tel" class="form-control" id="h_tel" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4 pb-2">
                                                        <div class="col">
                                                            <h2 class="text-secondary h5"><strong>COMMENTS?</strong></h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group input-group-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                                                </div>
                                                                <textarea class="form-control" id="h_comment" aria-label="With textarea" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
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
                        {{--<div class="tab-pane" id="tab2">--}}

                        {{--</div>--}}

                        <div class="row mt-5 justify-content-center">
                            <div class="col-4 text-center">
                                {{--<input type='button' class='btn btn-lg button-previous' name='previous' value='Previous' id="previus_tip" onclick="dnext(0)"/>--}}
                                {{--<input type='button' class='btn btn-lg btn-g-green button-next' name='next' value='Next' id="next_tip" onclick="dnext(1)"/>--}}
                                <button type="button" class="btn btn-lg btn-g-green btn-block" id="submit_tip" onclick="design()">Submit</button>
                                <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="h_load"></i>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-right">
                                <p class="">info@gotoperu.com</p>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center d-none" id="h_alert">
                            <div class="col-10">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <b><strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)</b>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </form>
            </div>

        </div><!-- /.row -->
    </div>
</section>