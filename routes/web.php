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

Route::get('/', 'FrontendController@index');
Route::get('/profil', 'FrontendController@profil');
Route::get('/kejuruan', 'FrontendController@kejuruan');
Route::get('/detail-kejuruan/{id}', 'FrontendController@detail');

Route::get('/kontak', function () {
    return view('indonesia.frontend.kontak');
});
Route::get('/berita', function () {
    return view('indonesia.frontend.berita');
});



Route::get('/fasilitas', function () {
    return view('indonesia.frontend.fasilitas');
});

Route::get('/ekskul', function () {
    return view('indonesia.frontend.ekskul');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	Route::resource('hak-akses','AksesController');
	Route::resource('artikel','ArtikelController');
	Route::resource('profil-sekolah','ProfilController');
	Route::resource('kejuruan','KejuruanController');
	Route::resource('fasilitas','FasilitasController');
	Route::resource('prestasi','PrestasiController');
	Route::resource('ekskul','EkskulController');
	Route::resource('komponen','KomponenController');
});



Route::get('akun/profile','AkunController@profile');
Route::get('akun/profile/edit','AkunController@editProfile');
Route::post('akun/profile','AkunController@updateProfile');
Route::get('akun/password','AkunController@editPassword');
Route::post('akun/password','AkunController@updatePassword');
Route::resource('kategori-artikel','KategoriArtikelController');
Route::resource('kategori-fasilitas','KategoriFasilitasController');