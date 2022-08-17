<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Route::get('', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['isAdmin','auth'],'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index')->middleware('isAdmin');
    // Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    // Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
    // Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    // Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');
    Route::resource('fotografers', \App\Http\Controllers\Admin\FotograferController::class);
    Route::delete('fotografers_mass_destroy', [\App\Http\Controllers\Admin\FotograferController::class, 'massDestroy'])->name('fotografers.mass_destroy');

    Route::resource('jenisfotos', \App\Http\Controllers\Admin\JenisfotoController::class);
    Route::delete('jenisfotos_mass_destroy', [\App\Http\Controllers\Admin\jenisfotoController::class, 'massDestroy'])->name('jenisfotos.mass_destroy');
    Route::resource('portofolios', \App\Http\Controllers\Admin\PortofolioController::class);
    Route::delete('portofolios_mass_destroy', [\App\Http\Controllers\Admin\PortofolioController::class, 'massDestroy'])->name('portofolios.mass_destroy');
    Route::resource('pricelists', \App\Http\Controllers\Admin\PricelistController::class);
    Route::delete('pricelists_mass_destroy', [\App\Http\Controllers\Admin\PricelistController::class, 'massDestroy'])->name('pricelists.mass_destroy');
    Route::resource('pelanggans', \App\Http\Controllers\Admin\PelangganController::class);
    Route::delete('pelanggans_mass_destroy', [\App\Http\Controllers\Admin\PelangganController::class, 'massDestroy'])->name('pelanggans.mass_destroy');
    Route::resource('pesanans', \App\Http\Controllers\Admin\PesananController::class);
    Route::delete('pesanans_mass_destroy', [\App\Http\Controllers\Admin\PesananController::class, 'massDestroy'])->name('pesanans.mass_destroy');

    Route::get('cari_pesanans', [\App\Http\Controllers\Admin\CariPesananController::class, 'index'])->name('cari_pesanans.index');
    Route::post('cari_pesanans', [\App\Http\Controllers\Admin\CariPesananController::class, 'index']);

    Route::get('system_calendars', [\App\Http\Controllers\Admin\SystemCalendarController::class, 'index'])->name('system_calendars.index');
});

Auth::routes();


Route::group(['middleware' => ['isUser','auth'],'prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('pricelistpelanggan', [\App\Http\Controllers\Pelanggan\PricelistpelangganController::class, 'index']);
    Route::resource('pesananpelanggan',\App\Http\Controllers\Pelanggan\PesananpelangganController::class);
});

Auth::routes();

//frontend user
Route::get('/beranda', function () {
    return view('pelanggan.beranda');
});
Route::get('/portofoliopelanggan', function () {
    return view('pelanggan.portofoliopelanggan.index2');
});


Route::get('/pricelistpelanggan', function () {
    return view('pelanggan.pricelistpelanggan.index');
});

Route::get('/pricelisttampil', function () {
    return view('pelanggan.pricelisttampil.index');
});

Route::get('/pesananpelanggan', function () {
    return view('pelanggan.pesananpelanggan.index');
});

Route::get('/hubungikami', function () {
    return view('pelanggan.hubungikami.hubungikami');
});

Route::get('/tentangkami', function () {
    return view('pelanggan.tentangkami.tentangkami');
});

Route::get('/home', function () {
    return view('home');
});
