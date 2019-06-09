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
    if(Auth::check()) {
        return redirect()->route('home');
    } 
    return view('login');
});

Route::get('logout', function() {
    Auth::logout();
    return redirect()->to('/');
})->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Agama
Route::get('/agama', 'AgamaController@index')->name('agama');
Route::post('/agama/save', 'AgamaController@store')->name('simpanagama');
Route::post('/agama/update', 'AgamaController@update')->name('editagama');
Route::get('/agama/delete/{id}', 'AgamaController@delete');

//Route Jenis
Route::get('/jenis', 'JenisController@index')->name('jenis');
Route::post('/jenis/save', 'JenisController@store')->name('simpanjenis');
Route::post('/jenis/update', 'JenisController@update')->name('editjenis');
Route::get('/jenis/delete/{id}', 'JenisController@delete');

//Route Alat
Route::get('/alat', 'AlatController@index')->name('alat');
Route::post('/alat/save', 'AlatController@store')->name('simpanalat');
Route::post('/alat/update', 'AlatController@update')->name('editalat');
Route::get('/alat/delete/{id}', 'AlatController@delete');


Route::post('/home/update/{id}', 'HomeController@update')->name('updateAgenda');
Route::get('/user', 'UserController@index')->name('user');
Route::post('/user/simpan', 'UserController@store')->name('simpanuser');
Route::post('/user/edit', 'UserController@update')->name('edituser');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/pdf/totalAgenda', 'PdfController@agendaAll')->name('totalAgenda');
Route::get('/pdf/agendaToday', 'PdfController@agendaToday')->name('agendaToday');
Route::get('/pdf/agendaMonth', 'PdfController@agendaMonth')->name('agendaMonth');
Route::get('/pdf/report', 'PdfController@pdf')->name('pdf');
Route::post('/pdf/report/print', 'PdfController@printpdf')->name('printpdf');

Route::get('/pdf', 'PdfController@index');
Route::get('/pdf/test', 'PdfController@test')->name('test');
