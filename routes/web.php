<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrap',function(){
    return view('bootstrap');
});

Route::get('/bulma',function(){
    return view('bulma');
});

Route::get('/materialize',function(){
    return view('materialize');
});

Route::post('/form-bulma',[FormController::class,'store'])->name('form_bulma.submit');