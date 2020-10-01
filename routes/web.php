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

Route::get('/berita', function () {
    return view('frontend.berita.index');
})->name('user.berita.index');

Route::get('/pengumuman', function () {
    return view('frontend.pengumuman.index');
})->name('user.pengumuman.index');

Route::group(['prefix' => 'sekolah'], function () {
    Route::get('/daftar', function () {
        return view('frontend.sekolah.daftar.index');
    })->name('user.daftar.sekolah.index');

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
    Route::get('/kelola/berita', function () {
        return view('backend.users.admin.berita.index');
    })->name('berita.index')->middleware('auth');
    Route::get('/kelola/pengumuman', function () {
        return view('backend.users.admin.pengumuman.index');
    })->name('pengumuman.index')->middleware('auth');
    Route::get('/kelola/daftar/sekolah', function () {
        return view('backend.users.admin.sekolah.daftar.index');
    })->name('daftar.sekolah.index')->middleware('auth');
    Route::get('/kelola/peringkat/sekolah', function () {
        return view('backend.users.admin.sekolah.peringkat.index');
    })->name('peringkat.index')->middleware('auth');
});

Auth::routes();
Route::get('/forget-password', 'Auth\ForgetPasswordController@reset')->name('forgot.pass');
Route::post('/forget-password', 'Auth\ForgetPasswordController@resetPass')->name('reset.pass');

Route::get('/home', 'HomeController@index')->name('home');
