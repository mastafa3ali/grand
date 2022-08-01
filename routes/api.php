<?php

use App\Http\Controllers\Api\AddController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function () {

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::post('/', [CategoryController::class, 'store']);
        Route::get('{category}', [CategoryController::class, 'get']);
        Route::put('{category}', [CategoryController::class, 'update']);
        Route::delete('bulkDelete', [CategoryController::class, 'bulkDelete']);
        Route::post('bulkRestore', [CategoryController::class, 'bulkRestore']);
    });
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [TagController::class, 'index']);
        Route::post('/', [TagController::class, 'store']);
        Route::get('{tag}', [TagController::class, 'get']);
        Route::put('{tag}', [TagController::class, 'update']);
        Route::delete('bulkDelete', [TagController::class, 'bulkDelete']);
        Route::post('bulkRestore', [TagController::class, 'bulkRestore']);
    });
    Route::group(['prefix' => 'adds'], function () {
        Route::get('/', [AddController::class, 'index']);
        Route::post('/', [AddController::class, 'store']);
        Route::get('{add}', [AddController::class, 'get']);
        Route::put('{add}', [AddController::class, 'update']);
        Route::delete('bulkDelete', [AddController::class, 'bulkDelete']);
        Route::post('bulkRestore', [AddController::class, 'bulkRestore']);
    });
    Route::get('advertiser_adds/{id}', [HomeController::class, 'advertiserAdds']);
    Route::get('filter-by-category/{id}', [HomeController::class, 'filterByCategory']);
    Route::get('filter-by-tag/{id}', [HomeController::class, 'filterByTag']);
});
