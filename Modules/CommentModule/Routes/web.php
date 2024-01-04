<?php

use Illuminate\Support\Facades\Route;
use Modules\CommentModule\Http\Controllers\CommentModuleController;


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


Route::group(['middleware' => 'web', 'namespace' => 'Modules\CommentModule\Http\Controllers'], function () {
    Route::get('comments', [CommentModuleController::class, 'index'])->name('comment.index');
    // Route::get('comments/create', 'CommentModuleController@create')->name('comment.create');
    Route::post('comments', 'CommentModuleController@store')->name('comment.store');
    // Route::get('comments/{id}', 'CommentModuleController@show')->name('comment.show');
});

