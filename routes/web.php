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

Route::get('/welcome', function () {
     dd('welcome');
});

Route::get("/chatbot",function(){
    dd("chatbot");
}); 

Route::get("/chatbot/{nurse_id}",function($id){
    dd("nurse id ".$id);
});