<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ApartListController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HousesListController;
use App\Http\Controllers\OneHomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia('welcome');
});

Route::get('/',[HomeController::class,'index'])->name('HomePage');

Route::get('/AboutUs',[AboutUsController::class, 'index'])->name('AboutUs');

Route::get('/ApartList',[ApartListController::class, 'index'])->name('ApartList');

Route::get('/OneHomePage',[OneHomePageController::class,'index'])->name('OneHomePage');

Route::get('/HousesList',[HousesListController::class,'index'])->name('HousesList');

Route::get('/Login',[LoginController::class, 'index'])->name('Login');

Route::get ('/Register',[RegisterController::class,'index'])->name('Register');

Route::get ('/Profile',[ProfileController::class,'index'])->name('Profile');

Route::get ('/EditPage',[EditController::class, 'index'])->name('EditPage');

Route::post ('/EditPage',[EditController::class, 'update'])->name('EditPage');

Route::post ('/Register',[RegisterController::class,'store']);

Route::post ('/Login',[LoginController::class,'authenticate']);

Route::post ('/Logout', [LoginController::class, 'destroy'])->name('logout');

Route::delete ('/Profile', [ProfileController::class, 'delete'])->name('delete');

