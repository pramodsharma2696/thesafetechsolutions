<?php

use App\Http\Controllers\Frontend\HomeController;
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


//HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(HomeController::class)->group(function(){
    //Route::get('/dashboard/department/list','index')->name('department.index');
});
