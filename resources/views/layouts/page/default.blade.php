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


@php
    $locale = App::getLocale();
@endphp
<footer class="bg-g-dark">
    <img data-src="{{asset('images/footer.jpg')}}" data-srcset="{{asset('images/footer.jpg')}}" alt="footer gotoperu" class="w-100 lazy has-webp">
    <div class="container footer-logo">
        <div class="row my-5 justify-content-center">
            <div class="col">
                <div class="row justify-content-between align-items-center">
                    <div class="col-4">
                        <img data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu" class="w-100 lazy has-webp">
                    </div>
                    <div class="col-4">
                        <div class="row mt-5">
                            <div class="col text-right">
                                <p class="font-weight-bold text-white">Follow  Us:</p>
                            </div>
                            <div class="col">
                                <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank" class="mx-2">
                                    <i data-feather="facebook" class="text-white" stroke-width="1"></i>
                                </a>
                                <a href="https://twitter.com/GOTOPERUCOM" target="_blank" class="mx-2">
                                    <i data-feather="twitter" class="text-white" stroke-width="1"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank" class="mx-2">
                                    <i data-feather="youtube" class="text-white" stroke-width="1"></i>
                                </a>
                                <a href="https://www.instagram.com/go.to.peru/" target="_blank" class="mx-2">
                                    <i data-feather="instagram" class="text-white" stroke-width="1"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 col-sm-8">--}}
{{--                <div class="alert bg-rgba-dark mt-4 text-white text-center" role="alert">--}}
{{--                    @lang('home.header_title')--}}
{{--                </div>--}}
{{--                <a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="btn btn-link font-weight-bold text-white d-block">Services Terms & Conditions</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="container">
        <div class="row pt-4">
            <div class="col-6 col-sm mb-3 text-white">
                <p class="h5 text-secondary font-weight-bold">@lang('home.general')</p>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">Travel Deals</a></li>--}}
                    <li><a href="{{route('home_path')}}" class="text-light font-weight-bold small">@lang('home.home')</a></li>
                    <li><a href="#" class="text-light font-weight-bold small">@lang('home.request_brochure')</a></li>
                    <li><a href="{{route('contact_us_path')}}" class="text-light font-weight-bold small">@lang('home.contact_us')</a></li>
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
                <p class="h5 text-secondary font-weight-bold">@lang('home.about_us')</p>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('about_path')}}" class="text-light font-weight-bold small">@lang('home.our_history')</a></li>
                    <li><a href="#" class="text-light font-weight-bold small">@lang('home.social_responsability')</a></li>
                    <li><a href="https://www.google.com/maps/place/GOTOPERU/@-13.5226792,-71.9748372,15z/data=!4m2!3m1!1s0x0:0xad9b34583ce776a0?sa=X&ved=2ahUKEwjZ86PazerjAhXuuFkKHb1dAaAQ_BIwE3oECAoQCA" target="_blank" class="text-light font-weight-bold small">@lang('home.offices')</a></li>
                    <li><a href="{{route('join_path')}}" class="text-light font-weight-bold small">@lang('home.join_our_team')</a></li>
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
                <p class="h5 text-secondary font-weight-bold">@lang('home.resources')</p>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('faq_path')}}" class="text-light font-weight-bold small">@lang('home.faq')</a></li>
                    <li><a href="{{route('category_path')}}" class="text-light font-weight-bold small">@lang('home.travel_categories')</a></li>
                    <li><a href="{{route('destinations_path')}}" class="text-light font-weight-bold small">@lang('home.destinations')</a></li>
                </ul>
            </div>

            <div class="col-6 col-sm mb-3 text-white">
                <p class="h5 text-secondary font-weight-bold">@lang('home.community')</p>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="#" class="text-light font-weight-bold small">@lang('home.gotoperu_blog')</a></li>
                    <li><a href="{{route('video_testimonials_path')}}" class="text-light font-weight-bold small">@lang('home.video_testimonial')</a></li>
                    <li><a href="{{route('testimonials_path')}}" class="text-light font-weight-bold small">@lang('home.reviews')</a></li>
                    <li><a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" class="text-light font-weight-bold small" target="_blank">Tripadvisor</a></li>
                    <li><a href="https://www.trustpilot.com/review/gotoperu.com" class="text-light font-weight-bold small" target="_blank">Trustpilot</a></li>
                    <li><a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" class="text-light font-weight-bold small" target="_blank">Yelp</a></li>
                </ul>
            </div>

            <div class="col-6 col-sm mb-3 text-white">
                <p class="h5 text-secondary font-weight-bold">@lang('home.travel_agents')</p>
                <div class="bg-rgba-dark-5 p-4">
                    <p class="small text-light">@lang('home.agent_of_change')</p>
                    <a href="{{route('contact_us_path')}}" class="btn btn-g-green font-weight-bold btn-block rounded-0">@lang('home.contact_us')</a>
                </div>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Offices</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li>PERU: Av. Collasuyo 986 Cusco-Peru</li>--}}
                    {{--<li>USA: 1440 G St NW, Washington DC, 20005</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
{{--            <div class="col-6 col-sm mb-3 text-white">--}}
{{--                <h3 class="h6 text-g-yellow">@lang('home.faq')</h3>--}}
{{--                <ul class="m-0 text-g-yellow list-unstyled">--}}
{{--                    <li><a href="{{route('getting_path')}}" class="text-white">@lang('home.ge')</a></li>--}}
{{--                    <li><a href="{{route('faq_path')}}" class="text-white">@lang('home.faq')</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm mb-3 text-white">--}}
{{--                <h3 class="h6 text-g-yellow">@lang('home.testimonials')</h3>--}}
{{--                <ul class="m-0 text-g-yellow list-unstyled">--}}
{{--                    --}}{{--<li><a href="#" class="text-white"></a></li>--}}
{{--                    <li><a href="{{route('testimonials_path')}}" class="text-white">@lang('home.testimonials')</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm mb-3 text-white">--}}
{{--                <h3 class="h6 text-g-yellow">@lang('home.contact_us')</h3>--}}
{{--                <ul class="m-0 text-g-yellow list-unstyled">--}}
{{--                    <li><a href="" class="text-white" data-toggle="modal" data-target="#modal-contact">@lang('home.email')</a></li>--}}
{{--                    <li><a href="tel:+2029963000">(202) 996-3000</a></li>--}}
{{--                    --}}{{--<li><a href="" class="text-white">Address</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-sm mb-3 text-white">--}}
{{--                <h3 class="h6 text-g-yellow">@lang('home.hotels')</h3>--}}
{{--                <ul class="m-0 text-g-yellow list-unstyled">--}}
{{--                    <li><a href="{{route('hotels_path')}}" class="text-white">@lang('home.hotels')</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>

        <div class="row">
            <div class="col text-center text-white">
                <p class="pb-3 h5 font-weight-bold">Call us, we're open 24/7</p>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="row">
                            <div class="col">
                                <a href="https://api.whatsapp.com/send?phone=12024911478" target="_blank" class="font-weight-bold text-white stretched-link">
                                    <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="30" data-toggle="tooltip" data-placement="top" title="Perú">
                                    +1 (202) 491-1478
                                </a>
                            </div>
                            <div class="col">
                                <p class="font-weight-bold text-white"><i data-feather="phone" class="text-white" stroke-width="1"></i> (202) 996-3000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="text-g-yellow small font-weight-bold">Terms & Conditions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col text-center text-white">
                <a href="https://www.google.com/maps/place/GOTOPERU/@-13.5226792,-71.9748372,15z/data=!4m2!3m1!1s0x0:0xad9b34583ce776a0?sa=X&ved=2ahUKEwjZ86PazerjAhXuuFkKHb1dAaAQ_BIwE3oECAoQCA" target="_blank" class="text-light small"><i class="fas fa-map-marker-alt"></i> Av. El Sol 449, Oficina 301. | Cusco - Cusco - Perú</a>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/d1b447b4-892c-4562-a6dc-536d0eb23944-loader.js" ></script>
<script>
    var locale = "{{$locale}}";

        //olark
        /*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
            f[z]=function(){
                (a.s=a.s||[]).push(arguments)};var a=f[z]._={
            },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
                f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
                0:+new Date};a.P=function(u){
                a.p[u]=new Date-a.p[0]};function s(){
                a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
                hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
                return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
                b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
                b.contentWindow[g].open()}catch(w){
                c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
                var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
                b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
            loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('8407-174-10-8084');/*]]>*/

    function startOlark() {
        olark('api.box.expand');
    }
</script>
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
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

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

        var s_ddd = $('#h_ddd').val();

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
        if (s_date.length == 0 ){
            $('#h_date').css("border-bottom", "2px solid #FF0000");
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
                "txt_ddd" : s_ddd,
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

    $(document).ready(function() {
        $('#redes').hide(0);


        $(window).scroll(function(){


            var windowHeight = $(window).scrollTop();
            var contenido2 = $(".contenido2").offset();

            contenido2 = contenido2.top;


            if(windowHeight >= contenido2  ){

                $('#redes').fadeIn(500);

            }else{
                $('#redes').fadeOut(500);

            }


        });

    });


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

    $('.datepicker').datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        minDate: 0

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


    (function (root, factory) {
        if (typeof define === 'function' && define.amd) {
            define(['exports'], factory);
        } else if (typeof exports !== 'undefined') {
            factory(exports);
        } else {
            factory((root.dragscroll = {}));
        }
    }(this, function (exports) {
        var _window = window;
        var _document = document;
        var mousemove = 'mousemove';
        var mouseup = 'mouseup';
        var mousedown = 'mousedown';
        var EventListener = 'EventListener';
        var addEventListener = 'add'+EventListener;
        var removeEventListener = 'remove'+EventListener;
        var newScrollX, newScrollY;
        var dragged = [];
        var reset = function(i, el) {
            for (i = 0; i < dragged.length;) {
                el = dragged[i++];
                el = el.container || el;
                el[removeEventListener](mousedown, el.md, 0);
                _window[removeEventListener](mouseup, el.mu, 0);
                _window[removeEventListener](mousemove, el.mm, 0);
            }
            // cloning into array since HTMLCollection is updated dynamically
            dragged = [].slice.call(_document.getElementsByClassName('dragscroll'));
            for (i = 0; i < dragged.length;) {
                (function(el, lastClientX, lastClientY, pushed, scroller, cont){
                    (cont = el.container || el)[addEventListener](
                        mousedown,
                        cont.md = function(e) {
                            if (!el.hasAttribute('nochilddrag') ||
                                _document.elementFromPoint(
                                    e.pageX, e.pageY
                                ) == cont
                            ) {
                                pushed = 1;
                                lastClientX = e.clientX;
                                lastClientY = e.clientY;
                                e.preventDefault();
                            }
                        }, 0
                    );
                    _window[addEventListener](
                        mouseup, cont.mu = function() {pushed = 0;}, 0
                    );
                    _window[addEventListener](
                        mousemove,
                        cont.mm = function(e) {
                            if (pushed) {
                                (scroller = el.scroller||el).scrollLeft -=
                                    newScrollX = (- lastClientX + (lastClientX=e.clientX));
                                scroller.scrollTop -=
                                    newScrollY = (- lastClientY + (lastClientY=e.clientY));
                                if (el == _document.body) {
                                    (scroller = _document.documentElement).scrollLeft -= newScrollX;
                                    scroller.scrollTop -= newScrollY;
                                }
                            }
                        }, 0
                    );
                })(dragged[i++]);
            }
        };
        if (_document.readyState == 'complete') {
            reset();
        } else {
            _window[addEventListener]('load', reset, 0);
        }
        exports.reset = reset;
    }));

</script>
{{--<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0088/4755.js" async="async"></script>--}}
<!-- Start of Async Drift Code -->
{{--<script>--}}
{{--    "use strict";--}}

{{--    !function() {--}}
{{--        var t = window.driftt = window.drift = window.driftt || [];--}}
{{--        if (!t.init) {--}}
{{--            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));--}}
{{--            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],--}}
{{--                t.factory = function(e) {--}}
{{--                    return function() {--}}
{{--                        var n = Array.prototype.slice.call(arguments);--}}
{{--                        return n.unshift(e), t.push(n), t;--}}
{{--                    };--}}
{{--                }, t.methods.forEach(function(e) {--}}
{{--                t[e] = t.factory(e);--}}
{{--            }), t.load = function(t) {--}}
{{--                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");--}}
{{--                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";--}}
{{--                var i = document.getElementsByTagName("script")[0];--}}
{{--                i.parentNode.insertBefore(o, i);--}}
{{--            };--}}
{{--        }--}}
{{--    }();--}}
{{--    drift.SNIPPET_VERSION = '0.3.1';--}}
{{--    drift.load('nd46tn9xuphe');--}}
{{--</script>--}}
<!-- End of Async Drift Code -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
</script>


</body>
</html>
