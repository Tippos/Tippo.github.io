<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectsController;
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

Route::get('/user', [userController::class, 'getListUser']);
Route::get('/class',[ClassesController::class, 'getListClass']);
Route::get('/subject',[SubjectsController::class,'getListSubject']);

Route::post('/addUser', [userController::class, 'addUser']);
Route::post('/addClass', [ClassesController::class, 'addClass']);
Route::post('/addSubject', [SubjectsController::class, 'addSubject']);


Route::get('',function(){
    return view('home');
}
);
Route::get('/home',function(){
    return view('home');
}
);
