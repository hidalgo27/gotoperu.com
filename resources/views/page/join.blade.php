@extends('layouts.page.default')
@section('content')

    <section class="header-video d-none d-md-block">
        <div id="title" class="text-white">
            <div class="container-fluid">
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col d-none d-xl-flex">
                        <i class="text-white">Top recommended Peru Travel Operator since 2009</i>
                    </div>
                    <div class="col-md col-lg text-right sticky-top">
                        <a href="tel:+2029963000" class="mx-3 h4">(202) 996-3000</a>
                        <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars"></i></a>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/join.jpg')}}" alt="" id="hero-vid">

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        {{--<div class="row my-3 justify-content-center text-center">--}}
                            {{--<p class="text-white display-4 font-weight-light">JOIN OUR TEAM</p>--}}
                        {{--</div>--}}
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">

                                <a href="#content-page" class="text-white">
                                    <i class="fa fa-4x fa-chevron-circle-down font-weight-light"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/join.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>JOIN OUR TEAM</strong></h1>
                    <p class="lead">A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>
                </div>>
            </div>

            <div class="row pb-5 align-items-center">
                <div class="col-8">
                    <img src="{{asset('images/team.jpg')}}" alt="" class="w-100 rounded">
                </div>
                <div class="col">

                        <form>
                            <div class="row pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>PERSONAL INFORMATION</strong></h2>
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

                            <div class="row mt-4 pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>INTRODUCTION</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                        </div>
                                        <textarea class="form-control" id="h_comment" aria-label="With textarea" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>AVAILABILITY</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="h_date" placeholder="Available to start" aria-label="" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 pb-2">
                                <div class="col">
                                    <h2 class="text-secondary h5"><strong>RESUME/CV</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Attach</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg float-right" disabled>Submit</button>
                        </form>

                </div>
            </div>
        </div>
    </section>

@stop