<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="Ihh0sYh7n0k-jfaQTWAlQUpg1fpT7aTD4Qf6k8gbD3Y" />
    <meta name="p:domain_verify" content="96cde57c8c54dbd171bf7de5d9564e89"/>
    {{--<title>Agencia de Viajes en Peru | Tours Machu Picchu</title>--}}
    {{--<meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">--}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link href="{{asset('images/icons/favicon/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body data-spy="scroll" data-target="#menu" class="position-relative bg-white">



@yield('content')

@include('layouts.page.menu-right')



<footer class="bg-g-dark">
    <img data-src="{{asset('images/footer.jpg')}}" data-srcset="{{asset('images/footer.jpg')}}" alt="footer gotoperu" class="w-100 lazy has-webp">
    <div class="container footer-logo">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <img data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu" class="w-100 lazy has-webp">
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
                <div class="alert bg-rgba-dark mt-4 text-white text-center" role="alert">
                    The <strong class="text-g-yellow">ONLY Peruvian Travel Operator</strong> with direct Sales Offices in the USA
                </div>
                <a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="btn btn-link font-weight-bold text-white d-block">Services Terms & Conditions</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Tour Packages</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">Travel Deals</a></li>--}}
                    <li><a href="{{route('packages_path')}}" class="text-white">Travel Packages</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Tour Packages</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="{{route('destinations_path')}}" class="text-white">1-3 Days</a></li>--}}
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">4-6 Days</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Destinations</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="https://gotoperu.com/destinations/peru-travel" class="text-white">Peru</a></li>
                    <li><a href="https://gotoperu.com/destinations/ecuador-travel" class="text-white">Ecuador</a></li>
                    <li><a href="https://gotoperu.com/destinations/bolivia-travel" class="text-white">Bolivia</a></li>
                    <li><a href="https://gotoperu.com/destinations/brasil-travel" class="text-white">Brasil</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Hotels</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white">2 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">3 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">4 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">5 Stars</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">About Us</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('about_path')}}" class="text-white">Social Responsibility</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Offices</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li>PERU: Av. Collasuyo 986 Cusco-Peru</li>--}}
                    {{--<li>USA: 1440 G St NW, Washington DC, 20005</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">FAQ</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('getting_path')}}" class="text-white">Getting To Peru</a></li>
                    <li><a href="{{route('faq_path')}}" class="text-white">Frequently Asked Questions</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Testimonials</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="#" class="text-white"></a></li>--}}
                    <li><a href="{{route('testimonials_path')}}" class="text-white">Reviews & Testmonials</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Contact Us</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="" class="text-white" data-toggle="modal" data-target="#modal-contact">Email</a></li>
                    <li><a href="tel:+2029963000">(202) 996-3000</a></li>
                    {{--<li><a href="" class="text-white">Address</a></li>--}}
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Hotels</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('hotels_path')}}" class="text-white">Hotels</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col text-center text-white">
                <small><i><b>PERU:</b> Av. Collasuyo 986 Cusco-Peru | <b>USA:</b> 1440 G St NW, Washington DC, 20005</i></small>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>

@stack('scripts')
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "GotoPeru",
  "url" : "https://gotoperu.com/",
  "sameAs" : [
    "https://twitter.com/GOTOPERUCOM",
    "https://plus.google.com/+Gotoperu",
    "https://www.facebook.com/GOTOPERUcom/",
    "https://www.pinterest.com/gotoperucom/",
    "https://www.instagram.com/gotoperucom/",
    "https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com",
    "https://www.trustpilot.com/review/gotoperu.com",
    "https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg"
 ]
}


</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script>
    $("#h_tel").intlTelInput({
        allowDropdown: true,
        autoHideDialCode: false,
        autoPlaceholder: "off",
        dropdownContainer: "body",
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        geoIpLookup: function(callback) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        // hiddenInput: "full_number",
        initialCountry: "auto",
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        placeholderNumberType: "phone",
        // preferredCountries: ['cn', 'jp'],
        separateDialCode: true,
//      utilsScript: "https://www.legacyfx.com/content/utils.js"
    });
</script>

<script>
    function estado() {
        $(".duration_ch").removeClass('active');
    }
    function estado2() {
        $(".number_ch").removeClass('active');
    }
    //formulario design
    function design(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#submit_tip").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


        var s_accommodation = document.getElementsByName('accommodation[]');
        var $accommodation = "";
        for (var i = 0, l = s_accommodation.length; i < l; i++) {
            if (s_accommodation[i].checked) {
                $accommodation += s_accommodation[i].value+' , ';
            }
        }
        s_accommodation = $accommodation.substring(0,$accommodation.length-3);

        var s_destinations = document.getElementsByName('destinations[]');
        var $destinations = "";
        for (var i = 0, l = s_destinations.length; i < l; i++) {
            if (s_destinations[i].checked) {
                $destinations += s_destinations[i].value+' , ';
            }
        }
        s_destinations = $destinations.substring(0,$destinations.length-3);

        var s_number = $(".number:checked").val();
        var s_number_t = $("#h_number").val();
        var s_duration = $(".duration:checked").val();
        var s_duration_t = $("#h_duration").val();
        var s_date = $('#h_date').val();
        var s_tel = $('#h_tel').val();
        var s_name = $('#h_name').val();
        var s_email = $('#h_email').val();
        var s_comment = $('#h_comment').val();

        var s_countryData = $("#h_tel").intlTelInput("getSelectedCountryData").name;
        var s_codeData = $("#h_tel").intlTelInput("getNumber");


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#h_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#h_name').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {

                "txt_accommodation" : s_accommodation,
                "txt_destinations" : s_destinations,
                "txt_number" : s_number,
                "txt_number_t" : s_number_t,
                "txt_duration" : s_duration,
                "txt_duration_t" : s_duration_t,
                "txt_date" : s_date,
                "txt_tel" : s_tel,
                "txt_name" : s_name,
                "txt_email" : s_email,
                "txt_comment" : s_comment,
                "txt_countryData" : s_countryData,
                "txt_codeData" : s_codeData,

            };
            $.ajax({
                data:  datos,
                url:   "{{route('design_path')}}",
                type:  'post',

                beforeSend: function () {

                    // $('#de_send').removeClass('show');
                    $("#submit_tip").addClass('d-none');
                    $("#h_load").removeClass('d-none');
                },
                success:  function (response) {
                    $('#h_form')[0].reset();
                    $('#submit_tip').removeClass('d-none');
                    $("#h_load").addClass('d-none');
                    $('#h_alert').removeClass('d-none');
                    // $("#h_alert b").html(response);
                    $("#h_alert").fadeIn('slow');
                    $("#submit_tip").removeAttr("disabled");
                }
            });
        } else{
            $("#submit_tip").removeAttr("disabled");
        }
    }

    $(document).ready(function() {
        $('#aviso').hide(0);


        $(window).scroll(function(){


            var windowHeight = $(window).scrollTop();
            var contenido2 = $(".contenido2").offset();

            contenido2 = contenido2.top;


            if(windowHeight >= contenido2  ){


                $('#aviso').fadeIn(500);

            }else{
                $('#aviso').fadeOut(500);

            }


        });

    });

    function ideal_trip(){
        $("#aviso").addClass('d-none');
        window.location.href="#inquire";
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(document).ready(function () {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('#title').css({
                'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
                'opacity': 1 - scrolled / 400 // fade out at 400px from top
            });
            $('#hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
        });

        // video controls
        $('#state').on('click', function () {
            var video = $('#hero-vid').get(0);
            var icons = $('#state > span');
            $('#overlay').toggleClass('fade');
            if (video.paused) {
                video.play();
                icons.removeClass('fa-play').addClass('fa-pause');
            } else {
                video.pause();
                icons.removeClass('fa-pause').addClass('fa-play');
            }
        });
    });

    $('.popover-hover').popover({
        trigger: 'hover'
    });

    $('.popover-focus').popover({
        trigger: 'focus',
        html: true
    });

    $('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous'});
    function dnext(estado){
        // alert(estado);
        if(estado == 0){
            // $("#previus_tip").addClass('d-none');
            $("#next_tip").removeClass('d-none');
            $("#submit_tip").addClass('d-none');
        }else{
            $("#next_tip").addClass('d-none');
            $("#submit_tip").removeClass('d-none');
        }
        // $('#de_alert').removeClass('d-none');
    }

    $('#h_date').datepicker({
        dateFormat: 'mm-dd-y',
        changeMonth: true,
        changeYear: true
    });

    (function () {
        function logEvent(eventName, element) {
            console.log(Date.now(), eventName, element.getAttribute('data-src'), element.getAttribute('src'));
        }
        var callback_enter = function (element) {
            logEvent("ENTERED", element);
        };
        var callback_load = function (element) {
            logEvent("LOADED", element);
        };
        var callback_set = function (element) {
            logEvent("SET", element);
        };
        var callback_error = function (element) {
            logEvent("ERROR", element);
            element.src = "https://placehold.it/220x280?text=Placeholder";
        };
        var llWebp = new LazyLoad({
            elements_selector: ".lazy.has-webp",
            to_webp: true,
            threshold: 0,
            callback_enter: callback_enter,
            callback_load: callback_load,
            callback_set: callback_set,
            callback_error: callback_error
        });
        var llStandard = new LazyLoad({
            elements_selector: ".lazy:not(.has-webp)",
            threshold: 0,
            callback_enter: callback_enter,
            callback_load: callback_load,
            callback_set: callback_set,
            callback_error: callback_error
        });
    }());

    $('.slider-recommended').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.slider-active').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    feather.replace();
</script>
{{--<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0027/9680.js" async="async"></script>--}}
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
</script>
</body>
</html>
