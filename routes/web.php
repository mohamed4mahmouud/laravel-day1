<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//to get all users data
Route::get('/users',[UserController::class,'index'])->name('users.index');

//to save user data
Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('users/{id}',[UserController::class, 'show'])->name('users.show')->where('id', '[0-9]+');;

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->where('id', '[0-9]+');;
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');



Route::fallback(function(){
    return "can't find this route";
});


