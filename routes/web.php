<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index.home');


Route::resource('/berita','frontend\BeritaController')->only(['index','show'])->names('user.berita')->parameters('id');
Route::resource('/pengumuman','frontend\PengumumanController')->only(['index','show'])->names('user.pengumuman')->parameters('id');

// Route::get('/pengumuman', function () {
//     return view('frontend.pengumuman.index');
// })->name('user.pengumuman.index');

Route::group(['prefix' => 'sekolah'], function () {
    Route::resource('/daftar','frontend\DaftarSekolahController')->only('index')->names('user.daftar.sekolah');

    Route::get('/peringkat', function () {
        return view('frontend.sekolah.peringkat.index');
    })->name('user.peringkat.sekolah.index');
});

Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about.index');


// route admin
Route::get('/admin/index', function () {
    return view('backend.users.admin.index');
})->name('admin.index')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/kelola/daftar/sekolah', 'DaftarSekolahController')->only(['index','store','destroy'])->names('daftar.sekolah')->parameters('id')->middleware('auth');
    Route::put('/kelola/daftar/sekolah/update', 'DaftarSekolahController@update')->name('daftar.sekolah.ubah')->middleware('auth');
    Route::resource('/kelola/berita', 'BeritaController')->names('berita')->only(['index','destroy','store'])->parameters('id')->middleware('auth');
    Route::post('/kelola/berita/update', 'BeritaController@update')->name('berita.ubah')->middleware('auth');
    Route::resource('/kelola/pengumuman','PengumumanController')->names('pengumuman')->only(['index','destroy','store'])->parameters('id')->middleware('auth');
    Route::post('/kelola/pengumuman/update', 'PengumumanController@update')->name('pengumuman.ubah')->middleware('auth');
    Route::resource('/kelola/peserta','DaftarPesertaController')->names('peserta')->only(['index','destroy'])->parameters('id')->middleware('auth');
    Route::get('/kelola/peringkat/sekolah', function () {
        return view('backend.users.admin.sekolah.peringkat.index');
    })->name('peringkat.index')->middleware('auth');
});

Auth::routes();
Route::get('/forget-password', 'Auth\ForgetPasswordController@reset')->name('forgot.pass');
Route::post('/forget-password', 'Auth\ForgetPasswordController@resetPass')->name('reset.pass');
Route::post('/signout','Auth\LoginController@logout')->name('signout');

Route::get('/home', 'HomeController@index')->name('home');
