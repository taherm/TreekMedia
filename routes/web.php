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




Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/services', function () {
    return view('service1');
});

Route::get('/booking-request', function () {
    return view('booking-request');
});

Route::get('/videography', function () {
    $name = "Videography";
    return view('videography', compact('name'));
});

Route::get('/sms', function () {
    $name = "SMS";
    return view('sms', compact('name'));
});

Route::get('/photography', function () {
    $name = "Photography";
    return view('photography', compact('name'));
});

Route::get('/live-event', function () {
    $name = "Live Event Converage";
    return view('live-event', compact('name'));
});


Route::get('/clients', function () {
    $icons = \App\Icon::all();

    return view('clients', compact('icons'));
});

Route::get('/services', function () {
    return view('services');
});

Route::get('admin', 'AdminController@index')->middleware('auth');
Route::post('admin/icons', 'AdminController@add_icons')->middleware('auth');
Route::delete('admin/del-slider', 'AdminController@delete_slider')->middleware('auth');
Route::get('admin/delete-slider', function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/add-icons', function () {
    return view('admin.add-icons');
})->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/booking-request', 'BookingController@send');