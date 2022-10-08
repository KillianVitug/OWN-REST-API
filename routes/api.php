<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [ProductsController::class, 'listProducts']);
Route::get('products/search/{keywords}', [ProductsController::class, 'productSearch']);
Route::get('products/categories',[ProductsController::class, 'listCategory']);
Route::get('products/category/{category_name}', [ProductsController::class, 'productCategory']);
Route::post('products/add', [ProductsController::class, 'addProduct']);
Route::put('products/{product_id}', [ProductsController::class, 'updateProduct']);
Route::delete('products/{product_id}', [ProductsController::class, 'deleteProduct']);
Route::get('products/{product_id}', [ProductsController::class, 'singleProduct']);