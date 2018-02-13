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
    'uses' => 'HomeController@index',
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
Route::get('/faq', [
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