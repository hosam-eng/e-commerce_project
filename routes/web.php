<?php

use Illuminate\Support\Facades\Route;

use App\cat;
use App\product;
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



Route::get('/AdminPage', "myCon@AdminPage");



Route::get('/DeleteProduct', "myCon@DeleteProduct");
Route::get('/DeleteProduct/{id}',function($id)
{
	$delproduct=product::find($id);
	$delproduct->delete();
	return redirect('/DeleteProduct');
});

Route::get('/AddProduct', "myCon@AddProduct");
Route::post('/AddProduct', "myCon@AddProduct");

Route::get('/DeleteCat','myCon@DeleteCat');
Route::get('/DeleteCat/{id}',function($id)
{
	$catigory=cat::find($id)->delete();
	return redirect('/DeleteCat');
});

Route::get('/AddCat', "myCon@AddCat");
Route::post('/AddCat', "myCon@AddCat");

Route::get('/EditProduct/{code}', "myCon@EditProduct");
Route::post('/EditProduct/{code}', "myCon@EditProduct");

Route::get('/ShowProduct', "myCon@ShowProduct");

Route::get('/ShowCat', "myCon@ShowCat");

Route::get('/EditCat/{id}', "myCon@EditCat");
Route::post('/EditCat/{id}', "myCon@EditCat");


Route::get('/session', "mysession@login");


Route::get('/category/{cat_id}','myCon@category')->name('name.cat');

Route::get('/delsession', "mysession@deletesession")->name('session.logout');
Route::get('/getsession', "mysession@getsession");

Route::get('/UserPages.history', "mysession@history");
Route::get('/history_permentaly', "mysession@history_permentaly")->name('history.permentaly');

Route::get('/Cart/{id}', "mysession@Cart")->name('name.cart');



Route::get('/admin/login', 'Auth\authadminController@showLoginForm')->name('admin.login');
Route::post('/AdminPage', 'Auth\authadminController@login')->name('admin.login.submit');

Route::get('/statistics', "myCon@statistics")->name('admin.statistic');

Route::get('/user/login', 'Auth\authuserController@showLoginForm')->name('user.login');

Route::get('/', 'Auth\authuserController@showLoginForm')->name('user.login');


Route::post('/UserPages.home', 'Auth\authuserController@login')->name('user.login.submit');

Route::get('/user/register', 'Auth\authregisterController@showRegisterForm')->name('user.register');
Route::post('/home', 'Auth\authregisterController@register')->name('user.register.submit');

Route::get('/home', 'myCon@home')->name('back.home');

Auth::routes();

