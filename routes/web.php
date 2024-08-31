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
    Route::get('/services','Services')->name('services');
    Route::get('/product-services','ProductServices')->name('productservices');
    Route::get('/financial-technology-setup','FinancialTechnologySetup')->name('financialtechnologysetup');

    #Web Development
    Route::get('/cmswebsite','CmsWebsite')->name('cmswebsite');
    Route::get('/webportals','WebPortals')->name('webportals');
    Route::get('/ecommerce-website','EcommerceWebsite')->name('ecommercewebsite');
    Route::get('/inventory-billing','InventoryBilling')->name('inventorybilling');
    Route::get('/ecommerce-mobile-app','EcommerceMobileApp')->name('ecommercemobileapp');

});
