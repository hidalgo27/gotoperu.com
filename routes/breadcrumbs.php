<?php
// Home > About
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::register('home', function ($trail) {
    $trail->push('Home', route('home_path'));
});

// Home > About
Breadcrumbs::register('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About Us', route('about_path'));
});

// Home > tours
Breadcrumbs::register('peru_tours', function ($trail) {
    $trail->parent('home');
    $trail->push('Peru Tours', route('peru_tours_path'));
});

// Home > Packages
Breadcrumbs::register('packages', function ($trail) {
    $trail->parent('home');
    $trail->push('Packages', route('packages_path'));
});

// Home > Packages
Breadcrumbs::register('itinerary', function ($trail, $title) {
    $trail->parent('packages');
    $trail->push(ucwords(strtolower($title)), route('itinerary_path', str_replace(' ','-',strtolower($title)), 6));
});

// Home > packages > [titulo]
Breadcrumbs::register('packages_show', function ($trail, $title, $duration) {
    $trail->parent('packages');
    $trail->push(''.ucwords(strtolower($title)).' '.$duration.' Days Tours', route('itinerary_path', [str_replace(' ','-',strtolower($title)), $duration]));
});

// Home > packages > [rango]
Breadcrumbs::register('packages_rango', function ($trail, $from, $to) {
    $trail->parent('packages');
    $trail->push($from.'-'.$to.' days', route('packages_durations_path', [$from, $to]));
});

// Home > Destinations
Breadcrumbs::register('destinations', function ($trail) {
    $trail->parent('home');
    $trail->push('Peru Destinations', route('destinations_path'));
});

// Home > Destinations > [titulo]
Breadcrumbs::register('destinations_show', function ($trail, $title) {
    $trail->parent('destinations');
    $trail->push(ucwords(strtolower($title)).' Tours', route('destinations_country_path', [str_replace(' ','-',strtolower($title))]));
});

// Home > Faq
Breadcrumbs::register('faq', function ($trail) {
    $trail->parent('home');
    $trail->push('Frequently Asked Questions', route('faq_path'));
});

// Home > Testimonials
Breadcrumbs::register('testimonials', function ($trail) {
    $trail->parent('home');
    $trail->push('Reviews and Testimonials', route('testimonials_path'));
});

// Home > Hotels
Breadcrumbs::register('hotels', function ($trail) {
    $trail->parent('home');
    $trail->push('Hotels', route('hotels_path'));
});

// Home > Contact
Breadcrumbs::register('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact_path'));
});