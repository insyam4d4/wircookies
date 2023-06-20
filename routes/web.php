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

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'console', 'as' => 'console.', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('console/dashboard');
    });

    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('menu-category', App\Http\Controllers\MenuCategoryController::class);

    Route::resource('menu', App\Http\Controllers\MenuController::class);
    Route::post('menu/export', [App\Http\Controllers\MenuController::class, 'export'])->name('menu.export');
});
