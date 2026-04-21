<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Models\Post;

Route::match(['get', 'post'], '/', [loginController::class, 'index'])->name('login');


Route::view('/login2', 'login2');
Route::view('/login1', 'login1');