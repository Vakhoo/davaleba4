<?php

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



Route::get('/permission', function () {
    return "no permission";
})->name("nopermision");


Route::get('/', "ProductsController@index")->name("index");
Route::get("/products/create", "ProductsController@create")->name("createproducts");
Route::post("/products/store", "ProductsController@store")->name('storeproducts');