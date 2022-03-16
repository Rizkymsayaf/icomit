<?php

// use App\Models\Post;
// use App\Models\User;

use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Htmsl\Dashboard;

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
//     return view(""
//     );
// });


Route::get('/', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

Route::get('dashboard', function() {
        return view('dashboard.index');
})->middleware('auth');

// Route::resource('/dashboard/anak_asuh', AnakAsuhController::class )->middleware('auth');
// Route::resource('/dashboard/anak', AnakController::class )->middleware('admin');


Route::resource('/subjects', SubjectController::class )->middleware('admin');



