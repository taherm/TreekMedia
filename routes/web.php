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

Route::get('/sms', function () {
    return view('sms');
});


Route::get('admin','AdminController@index')->middleware('auth');
Route::post('admin/slider','AdminController@add_slider')->middleware('auth');
Route::delete('admin/del-slider','AdminController@delete_slider')->middleware('auth');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
})->middleware('auth');
Route::get('admin/page','AdminController@show');
Route::get('admin/create-portfolio',function () {
    return view('admin.create-portfolio');
})->middleware('auth');
Route::get('admin/portfolio','AdminController@portfolio');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
})->middleware('auth');

Route::post('sub-menu','AdminController@submenu')->middleware('auth');
Route::post('main-menu','AdminController@mainmenu')->middleware('auth');
Route::post('admin','AdminController@store')->middleware('auth');
Route::delete('admin/{id}','AdminController@destroy')->middleware('auth');
Route::get('admin/{id}/edit','AdminController@edit')->middleware('auth');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu')->middleware('auth');
Route::post('admin/add-portfolio','AdminController@add_portfolio')->middleware('auth');
Route::post('admin/portfolio-edit/{id}','AdminController@edit_portfolio')->middleware('auth');

Route::delete('admin/delete-portfolio/{id}','AdminController@delete_portfolio')->middleware('auth');
Route::get('admin/edit-portfolio/{id}',function ($id) {
    $serv=Portfolio::find($id);
    return view('admin.edit-portfolio',compact('serv'));
})->middleware('auth');
Route::post('admin/{id}','AdminController@update')->middleware('auth');
Route::post('admin_edit/{id}','AdminController@updatemenu')->middleware('auth');

Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $cat = \App\Menu::all();
    return view('admin.menu',compact('cat'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}','AdminController@del')->middleware('auth');

Route::delete('admin/submenu_edit','AdminController@editsub')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');