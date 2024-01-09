<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyCategoryController;
use App\Http\Controllers\ShopifyCouponController;
use App\Http\Controllers\ShopifyCustomerController;
use App\Http\Controllers\ShopifyOrderController;
use App\Http\Controllers\ShopifyProductController;
use App\Http\Controllers\ShopifySyncController;

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

Route::group([], function ()
{
    Route::post('shopify/setting', [ShopifySyncController::class,'setting'])->name('shopify.setting');
    Route::resource('shopify-customer',ShopifyCustomerController::class);
    Route::resource('shopify-product',ShopifyProductController::class);
    Route::resource('shopify-order',ShopifyOrderController::class);
    Route::resource('shopify-category',ShopifyCategoryController::class);
    Route::resource('shopify-coupon',ShopifyCouponController::class);
});