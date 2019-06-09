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

//Route Jabatan
Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
Route::post('/jabatan/save', 'JabatanController@store')->name('simpanjabatan');
Route::post('/jabatan/update', 'JabatanController@update')->name('editjabatan');
Route::get('/jabatan/delete/{id}', 'JabatanController@delete');

//Route Pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
Route::get('/pegawai/tambah', 'PegawaiController@add')->name('tambahpegawai');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/save', 'PegawaiController@store')->name('simpanpegawai');
Route::post('/pegawai/update/{id}', 'PegawaiController@update')->name('editpegawai');
Route::get('/pegawai/delete/{id}', 'PegawaiController@delete');

//Route Peserta
Route::get('/peserta', 'PesertaController@index')->name('peserta');
Route::get('/peserta/tambah', 'PesertaController@add')->name('tambahpeserta');
Route::get('/peserta/edit/{id}', 'PesertaController@edit');
Route::post('/peserta/save', 'PesertaController@store')->name('simpanpeserta');
Route::post('/peserta/update/{id}', 'PesertaController@update')->name('editpeserta');
Route::get('/peserta/delete/{id}', 'PesertaController@delete');

//Route Akun
Route::get('/user', 'UserController@index')->name('user');
Route::post('/user/simpan', 'UserController@store')->name('simpanuser');
Route::post('/user/edit', 'UserController@update')->name('edituser');
Route::get('/user/delete/{id}', 'UserController@delete');

//Route Transaksi
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/tambah', 'TransaksiController@add')->name('tambahtransaksi');
Route::get('/transaksi/edit/{id}', 'TransaksiController@edit');
Route::post('/transaksi/save', 'TransaksiController@store')->name('simpantransaksi');
Route::post('/transaksi/update/{id}', 'TransaksiController@update')->name('edittransaksi');
Route::get('/transaksi/delete/{id}', 'TransaksiController@delete');

//Route Ibuhamil
Route::get('/ibuhamil', 'IbuhamilController@index')->name('ibuhamil');
Route::get('/ibuhamil/tambah', 'IbuhamilController@add')->name('tambahibuhamil');
Route::get('/ibuhamil/edit/{id}', 'IbuhamilController@edit');
Route::post('/ibuhamil/save', 'IbuhamilController@store')->name('simpanibuhamil');
Route::post('/ibuhamil/update/{id}', 'IbuhamilController@update')->name('editibuhamil');
Route::get('/ibuhamil/delete/{id}', 'IbuhamilController@delete');

//Route Bayi
Route::get('/bayi', 'BayiController@index')->name('bayi');
Route::get('/bayi/tambah', 'BayiController@add')->name('tambahbayi');
Route::get('/bayi/edit/{id}', 'BayiController@edit');
Route::post('/bayi/save', 'BayiController@store')->name('simpanbayi');
Route::post('/bayi/update/{id}', 'BayiController@update')->name('editbayi');
Route::get('/bayi/delete/{id}', 'BayiController@delete');

//Route Laporan PDF
Route::get('/laporan', 'LaporanController@index')->name('laporan');

Route::get('/pdf/totalAgenda', 'PdfController@agendaAll')->name('totalAgenda');
Route::get('/pdf/agendaToday', 'PdfController@agendaToday')->name('agendaToday');
Route::get('/pdf/agendaMonth', 'PdfController@agendaMonth')->name('agendaMonth');
Route::get('/pdf/report', 'PdfController@pdf')->name('pdf');
Route::post('/pdf/report/print', 'PdfController@printpdf')->name('printpdf');

Route::get('/pdf', 'PdfController@index');
Route::get('/pdf/test', 'PdfController@test')->name('test');
