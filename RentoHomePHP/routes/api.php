<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HousesListController;
use App\Http\Controllers\ApartListController;
use App\Http\Controllers\TermController;
use App\Models\Apartament;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/HousesList', [HousesListController::class, 'housesapi']);

Route::get('/ApartList', [ApartListController::class, 'apartamentsapi']);

Route::get('/TermsOfUsage', [TermController::class, 'termsapi']);
