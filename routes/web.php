<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PriceController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::group(['prefix' => 'administrator-panel'], function () {
    Auth::routes(['register' => false]);
    Route::group(['prefix' => '/dashboard'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/prices', [PriceController::class, 'index'])->name('admin.prices');
        Route::post('/price/change/{id}', [PriceController::class, 'store'])->name('admin.prices.change');
    });
});
