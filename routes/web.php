<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Application;
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

Route::get('/', [EventController::class, 'list']);

Route::post('/form_application', [ApplicationController::class , 'create']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/form_application/applications', [ApplicationController::class,'list']);
