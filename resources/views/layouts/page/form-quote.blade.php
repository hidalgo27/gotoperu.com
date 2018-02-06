<section>
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

<section class="bg-light py-5" id="Inquire">
    <div class="container-fluid">
        <div class="row py-5 justify-content-center">

            <div class="col-6">
                <div class="row justify-content-center pb-2">
                    <div class="col-10">
                        <h2 class="text-secondary h4 text-center"><strong>Create Your Dream Adventure</strong></h2>
                        <hr>
                    </div>
                </div>
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
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="row pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>HOTEL QUALITY</strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm">
                                            <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel economico">
                                                    <i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Budget
                                                    <div class="d-block text-center sec-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Turista">
                                                    <i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                                    <div class="d-block text-center sec-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Superior">
                                                    <i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                                    <div class="d-block text-center sec-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm">
                                            <div class="form-circ btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative" data-container="body" data-toggle="popover" data-placement="top" data-content="Hotel Lujo">
                                                    <i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>
                                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                                    <div class="d-block text-center sec-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 1 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                        </label>
                                        <label class="btn col ml-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Undecided</small>
                                        </label>
                                    </div>

                                    <div class="row mt-4 pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>TRIP LENGTH</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 3-5 <small class="d-block"><i class="text-g-yellow">Days</i></small></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="2"> 6-8 <small class="d-block"><i class="text-g-yellow">Days</i></small></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="3"> 9-11 <small class="d-block"><i class="text-g-yellow">Days</i></small></i>
                                        </label>
                                        <label class="btn col mx-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="4"> 12-15 <small class="d-block"><i class="text-g-yellow">Days</i></small></i>
                                        </label>
                                        <label class="btn col btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 16+ <small class="d-block"><i class="text-g-yellow">Days</i></small></i>
                                        </label>
                                        <label class="btn col ml-2 btn-outline-secondary number-hover">
                                            <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Undecided</small>
                                        </label>
                                    </div>

                                    <div class="row mt-4 pb-2">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>TRAVEL DATE <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="form-control" id="d_date" placeholder="Fecha de Viaje" aria-label="Username" aria-describedby="basic-addon1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="row pb-2">
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
                                                <input type="tel" class="form-control" id="d_tel" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 pb-2">
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
                                                <input type="text" class="form-control" id="d_name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 pb-2">
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
                                                <input type="email" class="form-control" id="d_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
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
                                                <textarea class="form-control" id="d_comment" aria-label="With textarea" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center">
                            <div class="col-10">
                                <input type='button' class='btn btn-lg button-previous' name='previous' value='Previous' id="previus_tip" onclick="dnext(0)"/>
                                <input type='button' class='btn btn-lg btn-g-green button-next' name='next' value='Next' id="next_tip" onclick="dnext(1)"/>
                                <button type="submit" class="btn btn-lg btn-primary d-none" id="submit_tip">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div>
</section>