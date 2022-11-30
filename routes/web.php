<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlatGelasController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GlasswareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\TrademarkController;
use App\Models\Location;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
// Alat gelas
Route::get('/inventory/glassware', [GlasswareController::class, 'index']);
// Standard
Route::get('/inventory/standard', [StandardController::class, 'index']);
Route::get('/inventory/standard/{standar:batch}', [StandardController::class, 'show']);
Route::get('/inventory/brand/{trademark:slug}', [TrademarkController::class, 'index']);
Route::get('/inventory/location/{location:slug}', [LocationController::class, 'index']);
// Blog
Route::get('/pages/blogs', [BlogController::class, 'index']);
Route::get('/pages/author', [AuthorController::class, 'index']);

Route::get('/login', function () {
  return view('backend.main');
});

