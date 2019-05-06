<section class="d-none d-xl-block">
    <div class="jumbotron jumbotron-slider-1 rounded-0 m-0">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-9 text-white text-center rounded">
                    <div class="row">
                        <div class="col">
                            <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><i data-feather="facebook" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i></a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/GOTOPERUCOM"><i data-feather="twitter" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i></a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/gotoperucom/"><i data-feather="instagram" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i></a>
                        </div>
                        <div class="col">
                            <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng"><i data-feather="youtube" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i></a>
                        </div>
                        <div class="col">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank" class="text-white"><i class="fab fa-tripadvisor" style="font-size: 45px"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="" id="Inquire">
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col">
                <div class="row justify-content-center pb-2">
                    <div class="col-8 col-sm-6 col-md-4 col-lg-3 mb-3">
                        <img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="w-100">
                    </div>
                    <div class="col col-sm-12 text-center">
                        <h2 class="h1 font-weight-bold text-g-dark mb-3">TRAVEL INQUIRE</h2>
                        <p class="lead text-muted font-weight-bold text-center">Help us design your perfect Peru vacation & Receive in 24hrs the first itineraries & quotes.</p>
                    </div>
                </div>
                <form id="h_form" role="form">
                    {{csrf_field()}}
                    <div class="row mt-4">
                        <div class="col-12 col-md">
                            <div class="row pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>HOTEL CATEGORY</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="col btn btn-outline-secondary bg-light shadow font-weight-bold text-secondary number-hover">
                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Budget
                                            <div class="d-block small">
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                        {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                        <label class="col btn btn-outline-secondary bg-light shadow font-weight-bold text-secondary number-hover">
                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                            <div class="d-block small">
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
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
                                        <label class="col btn btn-outline-secondary bg-light shadow font-weight-bold text-secondary number-hover">
                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                            <div class="d-block small">
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                        {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                        <label class="col btn btn-outline-secondary bg-light shadow font-weight-bold text-secondary number-hover">
                                            <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                            <div class="d-block small">
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
                                                <i class="fa fa-star text-g-yellow small"></i>
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
                                <label class="col-6 col-sm col-md-6 col-lg btn btn-outline-secondary text-secondary bg-light font-weight-bold mb-2 number-hover">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Lima">
                                    {{--<img src="{{asset('images/destinations/destinations/lima.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Lima
                                </label>
                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary bg-light font-weight-bold mb-2 number-hover">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Cusco">
                                    {{--<img src="{{asset('images/destinations/destinations/cusco.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Cusco
                                </label>
                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary bg-light font-weight-bold mb-2 number-hover">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Machu Pichu">
                                    {{--<img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Machu Picchu
                                </label>
                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 bg-light font-weight-bold number-hover">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Sacred Valley">
                                    {{--<img src="{{asset('images/destinations/destinations/sacred-valley.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Sacred Valley
                                </label>
                            </div>

                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                <label class="col-6 col-sm col-md-6 col-xl mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover bg-light font-weight-bold">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Lake Titicaca">
                                    {{--<img src="{{asset('images/destinations/destinations/puno-and-lake-titicaca.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Lake Titicaca
                                </label>
                                <label class="col-6 col-sm col-md-6 col-xl mx-sm-2 mx-md-0 mx-xl-2 mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary bg-light font-weight-bold text-secondary number-hover text-truncate" data-toggle="tooltip" data-placement="top" title="Nazca & Ballestas Island">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Nazca & Ballestas">
                                    {{--<img src="{{asset('images/destinations/destinations/nazca-lines.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Nazca & Ballestas
                                </label>
                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 btn btn-outline-secondary text-secondary bg-light font-weight-bold mb-2 number-hover">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Amazon">
                                    {{--<img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Amazon
                                </label>
                                <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 btn btn-outline-secondary ml-xl-2 text-secondary bg-light font-weight-bold mb-2 number-hover text-truncate" data-toggle="tooltip" data-placement="top" title="Arequipa & Colca Canyon">
                                    <input type="checkbox" name="destinations[]" autocomplete="off" value="Arequipa & Colca">
                                    {{--<img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                    Arequipa & Colca
                                </label>

                            </div>



                            <div class="row mt-4 pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>NUMBER OF TRAVELERS</strong></h2>
                                </div>
                            </div>

                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                <label class="btn col btn-outline-secondary number-hover number_ch font-weight-bold bg-light">
                                    <input type="radio" name="number" class="number" autocomplete="off" value="1"> 1 <i class="fa fa-male"></i>
                                </label>
                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch font-weight-bold bg-light">
                                    <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                </label>
                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch font-weight-bold bg-light">
                                    <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                </label>
                                <label class="btn col mx-2 btn-outline-secondary number-hover number_ch font-weight-bold bg-light">
                                    <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                </label>
                                <label class="btn col btn-outline-secondary number-hover number_ch font-weight-bold bg-light">
                                    <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                </label>
                                <div class="col input-group ml-2 small">
                                    <input type="text" class="form-control number font-weight-bold number_place" name="number" id="h_number" placeholder="Specify" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado2()">
                                </div>

                            </div>

                            <div class="row mt-4 pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>TRIP LENGTH</strong></h2>
                                </div>
                            </div>

                            <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0  mb-md-2 btn-outline-secondary duration_ch number-hover font-weight-bold bg-light">
                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="3-5" checked> 3-5 <span class="text-g-yellow small font-weight-bold">Days</span>
                                </label>
                                <label class="btn col-4 col-sm col-md-4 col-xl mx-sm-2 mx-xl-2 mx-md-0 mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover font-weight-bold bg-light">
                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="6-8"> 6-8 <span class="text-g-yellow font-weight-bold small">Days</span>
                                </label>
                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover font-weight-bold bg-light">
                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="9-11"> 9-11 <span class="text-g-yellow font-weight-bold small">Days</span>
                                </label>
                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary mx-xl-2 duration_ch number-hover font-weight-bold bg-light">
                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="12-15"> 12-15 <span class="text-g-yellow font-weight-bold small">Days</span>
                                </label>
                                <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover font-weight-bold bg-light">
                                    <input type="radio" name="duration" class="duration" autocomplete="off" value="16+"> 16+ <span class="text-g-yellow font-weight-bold small">Days</span>
                                </label>
                                <div class="col-4 col-sm col-md-4 col-xl input-group ml-sm-2 ml-md-0 ml-xl-2">
                                    <input type="text" class="form-control duration number_place font-weight-bold" name="duration" id="h_duration" placeholder="Specify" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado()">
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

                                                    <input type="tel" class="form-control form-control-lg" id="h_tel" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon1">

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

                    <div class="row mt-5 justify-content-center">
                        <div class="col-4 text-center">
                            {{--<input type='button' class='btn btn-lg button-previous' name='previous' value='Previous' id="previus_tip" onclick="dnext(0)"/>--}}
                            {{--<input type='button' class='btn btn-lg btn-g-green button-next' name='next' value='Next' id="next_tip" onclick="dnext(1)"/>--}}
                            <button type="button" class="btn btn-lg btn-g-green btn-block font-weight-bold" id="submit_tip" onclick="design()">Submit</button>
                            <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="h_load"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-right">
                            <p class="font-weight-bold text-muted">info@gotoperu.com</p>
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-center d-none" id="h_alert">
                        <div class="col-10">
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <b><strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS. :)</b>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div><!-- /.row -->
    </div>
</section>