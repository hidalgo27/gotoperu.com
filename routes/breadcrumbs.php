<?php
// Home > About
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home_path'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About Us', route('about_path'));
});

// Home > Packages
Breadcrumbs::for('packages', function ($trail) {
    $trail->parent('home');
    $trail->push('Packages', route('packages_path'));
});

// Home > Packages
Breadcrumbs::for('itinerary', function ($trail, $title) {
    $trail->parent('packages');
    $trail->push(ucwords(strtolower($title)), route('itinerary_path', str_replace(' ','-',strtolower($title)), 6));
});

// Home > packages > [titulo]
Breadcrumbs::for('packages_show', function ($trail, $title, $duration) {
    $trail->parent('packages');
    $trail->push(''.ucwords(strtolower($title)).' '.$duration.' Days Tours', route('itinerary_path', [str_replace(' ','-',strtolower($title)), $duration]));
});

// Home > packages > [rango]
Breadcrumbs::for('packages_rango', function ($trail, $from, $to) {
    $trail->parent('packages');
    $trail->push($from.'-'.$to.' days', route('packages_durations_path', [$from, $to]));
});

// Home > Destinations
Breadcrumbs::for('destinations', function ($trail) {
    $trail->parent('home');
    $trail->push('Peru Destinations', route('destinations_path'));
});

// Home > Destinations > [titulo]
Breadcrumbs::for('destinations_show', function ($trail, $title) {
    $trail->parent('destinations');
    $trail->push(ucwords(strtolower($title)).' Tours', route('destinations_country_path', [str_replace(' ','-',strtolower($title))]));
});

// Home > Faq
Breadcrumbs::for('faq', function ($trail) {
    $trail->parent('home');
    $trail->push('Frequently Asked Questions', route('faq_path'));
});

// Home > Testimonials
Breadcrumbs::for('testimonials', function ($trail) {
    $trail->parent('home');
    $trail->push('Reviews and Testimonials', route('testimonials_path'));
});

// Home > Hotels
Breadcrumbs::for('hotels', function ($trail) {
    $trail->parent('home');
    $trail->push('Hotels', route('hotels_path'));
});

// Home > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact_path'));
});