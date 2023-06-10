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

Route::get('/', function () {
    return view('welcome');
});
/**
 * crm
 */
Route::get('/homepage', [\App\Http\Controllers\HomepageController::class, 'homepage']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'news']);
Route::get('/create_news', [\App\Http\Controllers\NewsController::class, 'create']);
Route::get('/save_news', [\App\Http\Controllers\NewsController::class, 'save']);
