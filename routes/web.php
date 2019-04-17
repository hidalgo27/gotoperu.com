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
//category
Route::get('/packages/category', [
    'uses' => 'HomepageController@category',
    'as' => 'category_path',
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

//ADMINISTRADOR
Auth::routes();
Route::get('/home', 'admin\HomeController@index')->name('home')->middleware('auth', 'role:admin');

Route::get('admin/package/create', [
    'uses' => 'admin\HomeController@create',
    'as' => 'admin_package_create_path',
]);
Route::post('admin/package/store', [
    'uses' => 'admin\HomeController@store',
    'as' => 'admin_package_store_path',
]);
Route::get('admin/package/edit/{id}', [
    'uses' => 'admin\HomeController@edit',
    'as' => 'admin_package_edit_path',
]);
Route::post('admin/package/update/{id}', [
    'uses' => 'admin\HomeController@update',
    'as' => 'admin_package_update_path',
]);
Route::post('admin/package/duration', [
    'uses' => 'admin\HomeController@duration',
    'as' => 'admin_package_duration_path',
]);
Route::get('admin/package/load/{id}/{duration}', [
    'uses' => 'admin\HomeController@load',
    'as' => 'load_path',
]);
Route::delete('admin/package/edit/{id}', [
    'uses' => 'admin\HomeController@destroy',
    'as' => 'admin_package_delete_path',
]);

Route::get('admin/package/image/image_upload', [
    'uses' => 'admin\HomeController@image_upload',
    'as' => 'admin_upload_file_path',
]);
Route::post('admin/package/image/image_store', [
    'uses' => 'admin\HomeController@image_store',
    'as' => 'admin_image_maps_store_path',
]);
Route::post('admin/package/image/image_delete', [
    'uses' => 'admin\HomeController@image_delete',
    'as' => 'admin_image_delete_path',
]);

Route::post('admin/package/image/image_store_slider', [
    'uses' => 'admin\HomeController@image_store_slider',
    'as' => 'admin_image_slider_store_path',
]);
Route::post('admin/package/image/image_delete_slider', [
    'uses' => 'admin\HomeController@image_delete_slider',
    'as' => 'admin_image_slider_delete_path',
]);
Route::post('admin/package/image/image_delete_package_form', [
    'uses' => 'admin\HomeController@image_delete_package_form',
    'as' => 'admin_image_delete_package_form_path',
]);
Route::post('admin/package/image/image_delete_map_package_form', [
    'uses' => 'admin\HomeController@image_delete_map_package_form',
    'as' => 'admin_image_delete_map_package_form_path',
]);
//itinerary
Route::get('admin/itinerary', [
    'uses' => 'admin\ItineraryController@index',
    'as' => 'admin_itinerary_index_path',
]);
Route::get('admin/itinerary/create', [
    'uses' => 'admin\ItineraryController@create',
    'as' => 'admin_itinerary_create_path',
]);
Route::post('admin/itinerary/store', [
    'uses' => 'admin\ItineraryController@store',
    'as' => 'admin_itinerary_store_path',
]);
Route::get('admin/itinerary/edit/{id}', [
    'uses' => 'admin\ItineraryController@edit',
    'as' => 'admin_itinerary_edit_path',
]);
Route::post('admin/itinerary/update/{id}', [
    'uses' => 'admin\ItineraryController@update',
    'as' => 'admin_itinerary_update_path',
]);
Route::delete('admin/itinerary/edit/{id}', [
    'uses' => 'admin\ItineraryController@destroy',
    'as' => 'admin_itinerary_delete_path',
]);
Route::post('admin/itinerary/image/image_store', [
    'uses' => 'admin\ItineraryController@image_store',
    'as' => 'admin_itinerary_image_store_path',
]);
Route::post('admin/itinerary/image/image_delete', [
    'uses' => 'admin\ItineraryController@image_delete',
    'as' => 'admin_iitinerary_mage_delete_path',
]);
Route::post('admin/itinerary/image/image_delete_form', [
    'uses' => 'admin\ItineraryController@image_delete_form',
    'as' => 'admin_iitinerary_image_delete_form_path',
]);
Route::get('admin/itinerary/image/image_list', [
    'uses' => 'admin\ItineraryController@image_list',
    'as' => 'admin_itinerary_list_path',
]);
//destinations
Route::get('admin/destinations', [
    'uses' => 'admin\DestinationsController@index',
    'as' => 'admin_destinations_index_path',
]);
Route::get('admin/destinations/create', [
    'uses' => 'admin\DestinationsController@create',
    'as' => 'admin_destinations_create_path',
]);
Route::post('admin/destinations/store', [
    'uses' => 'admin\DestinationsController@store',
    'as' => 'admin_destinations_store_path',
]);
Route::get('admin/destinations/edit/{id}', [
    'uses' => 'admin\DestinationsController@edit',
    'as' => 'admin_destinations_edit_path',
]);
Route::post('admin/destinations/update/{id}', [
    'uses' => 'admin\DestinationsController@update',
    'as' => 'admin_destinations_update_path',
]);
Route::delete('admin/destinations/edit/{id}', [
    'uses' => 'admin\DestinationsController@destroy',
    'as' => 'admin_destinations_delete_path',
]);
//included
Route::get('admin/included', [
    'uses' => 'admin\IncludedController@index',
    'as' => 'admin_included_index_path',
]);
Route::post('admin/included/store', [
    'uses' => 'admin\IncludedController@store',
    'as' => 'admin_included_store_path',
]);
Route::post('admin/included/update/{id}', [
    'uses' => 'admin\IncludedController@update',
    'as' => 'admin_included_update_path',
]);
Route::delete('admin/included/edit/{id}', [
    'uses' => 'admin\IncludedController@destroy',
    'as' => 'admin_included_delete_path',
]);
//not included
Route::get('admin/not-included', [
    'uses' => 'admin\NotIncludedController@index',
    'as' => 'admin_not_included_index_path',
]);
Route::post('admin/not-included/store', [
    'uses' => 'admin\NotIncludedController@store',
    'as' => 'admin_not_included_store_path',
]);
Route::post('admin/not-included/update/{id}', [
    'uses' => 'admin\NotIncludedController@update',
    'as' => 'admin_not_included_update_path',
]);
Route::delete('admin/not-included/edit/{id}', [
    'uses' => 'admin\NotIncludedController@destroy',
    'as' => 'admin_not_included_delete_path',
]);
//category
Route::get('admin/category', [
    'uses' => 'admin\CategoryController@index',
    'as' => 'admin_category_index_path',
]);
Route::post('admin/category/store', [
    'uses' => 'admin\CategoryController@store',
    'as' => 'admin_category_store_path',
]);
Route::post('admin/category/update/{id}', [
    'uses' => 'admin\CategoryController@update',
    'as' => 'admin_category_update_path',
]);
Route::delete('admin/category/edit/{id}', [
    'uses' => 'admin\CategoryController@destroy',
    'as' => 'admin_category_delete_path',
]);
//difficulty
Route::get('admin/difficulty', [
    'uses' => 'admin\DifficultyController@index',
    'as' => 'admin_difficulty_index_path',
]);
Route::post('admin/difficulty/store', [
    'uses' => 'admin\DifficultyController@store',
    'as' => 'admin_difficulty_store_path',
]);
Route::post('admin/difficulty/update/{id}', [
    'uses' => 'admin\DifficultyController@update',
    'as' => 'admin_difficulty_update_path',
]);
Route::delete('admin/difficulty/edit/{id}', [
    'uses' => 'admin\DifficultyController@destroy',
    'as' => 'admin_difficulty_delete_path',
]);
