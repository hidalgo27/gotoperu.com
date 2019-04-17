@extends('layouts.page.default')
@section('content')

    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/about.jpg')}}" alt="" id="hero-vid" class="banner-itinerary">
            {{--@include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        {{--<div class="row my-3 justify-content-center text-white font-weight-bold h2">--}}
                            {{--FREQUENTLY ASKED QUESTIONS--}}
                        {{--</div>--}}
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#content-page" class="text-white">
                                    <i data-feather="chevron-down" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pt-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold text-g-yellow">IMAGE GALLERY</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 bg-white">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="elfsight-app-ad008096-71c7-431c-ba6f-adcddcfefe8f"></div>
                </div>
            </div>
        </div>
    </section>



    @push('scripts')

    @endpush

@stop