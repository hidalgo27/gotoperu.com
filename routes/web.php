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
    'uses' => 'HomepageController@index2',
    'as' => 'home_path',
]);

//packages
Route::get('/packages', [
    'uses' => 'HomepageController@packages',
    'as' => 'packages_path',
]);

Route::get('/packages/{from}-{to}-days', [
    'uses' => 'HomepageController@packages_durations',
    'as' => 'packages_durations_path',
]);

Route::get('/tours-packages', [
    'uses' => 'HomepageController@packages_list',
    'as' => 'packages_list_path',
]);

//itinerary
Route::get('/packages/{title}/{days}-days-tours', [
    'uses' => 'HomepageController@itinerary',
    'as' => 'itinerary_path',
]);

Route::get('/packages/{title}/{days}-days-tours/check-availability', [
    'uses' => 'HomepageController@itinerary',
    'as' => 'itinerary_path',
]);

//complete
Route::get('/packages/air-land/peru-machu-picchu-from-usa/7-days-tours', [
    'uses' => 'HomepageController@complete',
    'as' => 'complete_path',
]);
Route::get('/packages/air-land/peru-machu-picchu-from-usa/7-days-tours/detail/{air}-{price}', [
    'uses' => 'HomepageController@complete_detail',
    'as' => 'complete_detail_path',
]);
Route::get('/packages/air-land/{title}/{days}-days-tours/book', [
    'uses' => 'HomepageController@book',
    'as' => 'book_path',
]);

Route::post('/packages/air-land/lista_precio_aero', [
    'uses' => 'HomepageController@lista_precio_aero',
    'as' => 'lista_precio_aero_path',
]);
Route::post('/packages/air-land/precio_aero', [
    'uses' => 'HomepageController@precio_aero',
    'as' => 'precio_aero_path',
]);
Route::post('/packages/air-land/inquire_detail_p', [
    'uses' => 'HomepageController@inquire_detail_p',
    'as' => 'inquire_detail_p_path',
]);

Route::post('/packages/air-land/availability_inquire', [
    'uses' => 'HomepageController@availability_inquire',
    'as' => 'availability_inquire_path',
]);

//information
Route::get('/packages/{title}/{days}-days-tours/information', [
    'uses' => 'HomepageController@information',
    'as' => 'information_path',
]);

//payment
Route::get('/packages/{title}/{days}-days-tours/payment', [
    'uses' => 'HomepageController@payment',
    'as' => 'payment_path',
]);


//destination
Route::get('/destinations', [
    'uses' => 'HomepageController@destinations',
    'as' => 'destinations_path',
]);
Route::get('/destinations/{title}', [
    'uses' => 'HomepageController@destinations_country',
    'as' => 'destinations_country_path',
]);
Route::get('/destinations/{title}/{city}', [
    'uses' => 'HomepageController@destinations_country_show',
    'as' => 'destinations_country_show_path',
]);

//about
Route::get('/about-us', [
    'uses' => 'HomepageController@about',
    'as' => 'about_path',
]);

//getting
Route::get('/getting-to-peru', [
    'uses' => 'HomepageController@getting',
    'as' => 'getting_path',
]);

//testimonials
Route::get('/testimonials', [
    'uses' => 'HomepageController@testimonials',
    'as' => 'testimonials_path',
]);

//faq
Route::get('/frequently-asked-questions', [
    'uses' => 'HomepageController@faq',
    'as' => 'faq_path',
]);

//travel agents
Route::get('/travel-agents', [
    'uses' => 'HomepageController@agents',
    'as' => 'agents_path',
]);

//travel deals
Route::get('/travel-deals', [
    'uses' => 'HomepageController@deals',
    'as' => 'deals_path',
]);
//contact
Route::get('/contact-us', [
    'uses' => 'HomepageController@contact_us',
    'as' => 'contact_us_path',
]);

Route::post('/contact_s', [
    'uses' => 'HomepageController@contact_s',
    'as' => 'contact_s_path',
]);

//formularios
Route::post('/inquire', [
    'uses' => 'HomepageController@inquire',
    'as' => 'inquire_path',
]);

Route::post('/contact', [
    'uses' => 'HomepageController@contact',
    'as' => 'contact_path',
]);

Route::post('/design', [
    'uses' => 'HomepageController@design',
    'as' => 'design_path',
]);

//page not found
Route::get('/404', [
    'uses' => 'HomepageController@pagenotfound',
    'as' => 'notfound_path',
]);

//hotels
Route::get('/hotels', [
    'uses' => 'HomepageController@hotels',
    'as' => 'hotels_path',
]);

//join our team
Route::get('/join-our-team', [
    'uses' => 'HomepageController@join',
    'as' => 'join_path',
]);

//gallery
Route::get('/gallery', [
    'uses' => 'HomepageController@gallery',
    'as' => 'gallery_path',
]);

//gallery
Route::get('/peru-tours', [
    'uses' => 'HomepageController@peru_tours',
    'as' => 'peru_tours_path',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth', 'role:admin');;
