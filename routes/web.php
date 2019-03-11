<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'HomeController@index2',
    'as' => 'home_path',
]);

//packages
Route::get('/packages', [
    'uses' => 'HomeController@packages',
    'as' => 'packages_path',
]);

Route::get('/packages/{from}-{to}-days', [
    'uses' => 'HomeController@packages_durations',
    'as' => 'packages_durations_path',
]);

Route::get('/tours-packages', [
    'uses' => 'HomeController@packages_list',
    'as' => 'packages_list_path',
]);

//itinerary
Route::get('/packages/{title}/{days}-days-tours', [
    'uses' => 'HomeController@itinerary',
    'as' => 'itinerary_path',
]);

Route::get('/packages/{title}/{days}-days-tours/check-availability', [
    'uses' => 'HomeController@itinerary',
    'as' => 'itinerary_path',
]);

//complete
Route::get('/packages/air-land/peru-machu-picchu-from-usa/7-days-tours', [
    'uses' => 'HomeController@complete',
    'as' => 'complete_path',
]);
Route::get('/packages/air-land/peru-machu-picchu-from-usa/7-days-tours/detail/{air}-{price}', [
    'uses' => 'HomeController@complete_detail',
    'as' => 'complete_detail_path',
]);
Route::get('/packages/air-land/{title}/{days}-days-tours/book', [
    'uses' => 'HomeController@book',
    'as' => 'book_path',
]);

Route::post('/packages/air-land/lista_precio_aero', [
    'uses' => 'HomeController@lista_precio_aero',
    'as' => 'lista_precio_aero_path',
]);
Route::post('/packages/air-land/precio_aero', [
    'uses' => 'HomeController@precio_aero',
    'as' => 'precio_aero_path',
]);
Route::post('/packages/air-land/inquire_detail_p', [
    'uses' => 'HomeController@inquire_detail_p',
    'as' => 'inquire_detail_p_path',
]);

Route::post('/packages/air-land/availability_inquire', [
    'uses' => 'HomeController@availability_inquire',
    'as' => 'availability_inquire_path',
]);

//information
Route::get('/packages/{title}/{days}-days-tours/information', [
    'uses' => 'HomeController@information',
    'as' => 'information_path',
]);

//payment
Route::get('/packages/{title}/{days}-days-tours/payment', [
    'uses' => 'HomeController@payment',
    'as' => 'payment_path',
]);


//destination
Route::get('/destinations', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);
Route::get('/destinations/{title}', [
    'uses' => 'HomeController@destinations_country',
    'as' => 'destinations_country_path',
]);
Route::get('/destinations/{title}/{city}', [
    'uses' => 'HomeController@destinations_country_show',
    'as' => 'destinations_country_show_path',
]);

//about
Route::get('/about-us', [
    'uses' => 'HomeController@about',
    'as' => 'about_path',
]);

//getting
Route::get('/getting-to-peru', [
    'uses' => 'HomeController@getting',
    'as' => 'getting_path',
]);

//testimonials
Route::get('/testimonials', [
    'uses' => 'HomeController@testimonials',
    'as' => 'testimonials_path',
]);

//faq
Route::get('/frequently-asked-questions', [
    'uses' => 'HomeController@faq',
    'as' => 'faq_path',
]);

//travel agents
Route::get('/travel-agents', [
    'uses' => 'HomeController@agents',
    'as' => 'agents_path',
]);

//travel deals
Route::get('/travel-deals', [
    'uses' => 'HomeController@deals',
    'as' => 'deals_path',
]);
//contact
Route::get('/contact-us', [
    'uses' => 'HomeController@contact_us',
    'as' => 'contact_us_path',
]);

Route::post('/contact_s', [
    'uses' => 'HomeController@contact_s',
    'as' => 'contact_s_path',
]);

//formularios
Route::post('/inquire', [
    'uses' => 'HomeController@inquire',
    'as' => 'inquire_path',
]);

Route::post('/contact', [
    'uses' => 'HomeController@contact',
    'as' => 'contact_path',
]);

Route::post('/design', [
    'uses' => 'HomeController@design',
    'as' => 'design_path',
]);

//page not found
Route::get('/404', [
    'uses' => 'HomeController@pagenotfound',
    'as' => 'notfound_path',
]);

//hotels
Route::get('/hotels', [
    'uses' => 'HomeController@hotels',
    'as' => 'hotels_path',
]);

//join our team
Route::get('/join-our-team', [
    'uses' => 'HomeController@join',
    'as' => 'join_path',
]);

//gallery
Route::get('/gallery', [
    'uses' => 'HomeController@gallery',
    'as' => 'gallery_path',
]);

//gallery
Route::get('/peru-tours', [
    'uses' => 'HomeController@peru_tours',
    'as' => 'peru_tours_path',
]);
