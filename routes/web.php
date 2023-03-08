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

Route::post('/form', function () {
    $request = request();

    $application = new \App\Models\Application();
    $application -> email = $request -> get('email');
    $application -> lastname = $request -> get('lastname');
    $application -> firstname = $request -> get('firstname');
    $application -> title = $request -> get('title');
    $application -> date = $request -> get('date');

    $application -> save();

    return redirect('/form');
});

Route::get('/form/applications', function () {
    $applications = \App\Models\Allpication::all();

    dd($application);
});

