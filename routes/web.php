<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/form', function () {
    return view('forms');
});

Route::post('/form', [EventController::class , 'addApplication'] );

Route::get('/form/applications', function () {
    $applications = \App\Models\Allpication::all();

    dd($application);
});

Route::get('/', [EventController::class, 'list']);


Route::post('/form_application', [ApplicationController::class , 'create']);

Route::get('/event/{id}', [EventController::class, 'show']);



Route::get('/form_application/applications', [ApplicationController::class,'list']);
