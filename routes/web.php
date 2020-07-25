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
    return view('website.index');
});

Route::get('page/{id}', 'ajaxController@page_function');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin_panel', 'admin_panel');
//User Controller
Route::resource('user', 'userController');

Route::resource('edit', 'userController');

Route::put('user_update/{id}', 'userController@update');

Route::resource('delete', 'userController');

Route::post('create_user', 'userController@store');

//User Controller

//Product Controller
Route::resource('product', 'productController');

//Product Controller

//Menu Controller

Route::resource('menu', 'menuController');

Route::resource('update', 'menuController');

Route::post('create_menu', 'menuController@store');

//Menu Controller

//Sub Menu Controller

Route::resource('sub_menu', 'subMenuController');



//Sub Menu Controller

//Menu Permission Controller

Route::resource('menu_permission', 'permissionController');

Route::get('menu_id/{id}', 'nController@dropdown');

Route::get('update_id/{id}', 'nController@update');
// ajax controller
Route::get('/ajax/get_all_item', 'ajaxController@get_all_items');
// ajax controller
//Menu Permission Controller

$dynamic_menu = \DB::table('sub_menus')->get();

foreach($dynamic_menu as $s){
    
Route::resource($s->sub_menu_url, ''.$s->sub_menu_url.'Controller');
}

// mail routes

Route::get('sendMail','mailController@send');