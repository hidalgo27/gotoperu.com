@extends('layouts.page.default')
@section('content')
    <section class="mb-4">
        <img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green">GoToPeru Reviews And Testimonials</h1>
                    <p class="lead">We could go on and on about GOTOPERU, but we prefer to show a sample of the testimonials we receive from our value clients from around the world. Check out reviews of GOTOPERU on TripAdvisor or on our own website with over 1000+ testimonials. We want to make you another one of our satisfied clients by giving you stellar service and quality travel, which we have been providing to our customers since 2009.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-9 col-lg-6">
                    @foreach($testimonials as $testimonial)
                    <div class="row mb-5">
                        <div class="col">
                            <p>
                                <i class="fa fa-quote-left fa-2x float-left text-secondary pr-2"></i>
                                    {{$testimonial->contenido}}
                                <i class="fa fa-quote-right fa-2x float-right text-secondary pl-2"></i>
                            </p>
                            <i class="float-right">{{$testimonial->nombre}} {{$testimonial->ciudad}}</i>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <nav aria-label="Page navigation example">
                        {{ $testimonials->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop