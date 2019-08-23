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


Auth::routes();

Route::get("/", "HomeController@home");

Route::get("/products", "ProductsController@all");

Route::get("/brands", "BrandsController@all");

Route::get("/categories", "CategoriesController@all");

Route::get("/category/{id}", "CategoriesController@detail");

Route::get("/brand/{id}", "BrandsController@detail");

Route::get("/product/{id}", "ProductsController@detail");

Route::get("/search", "ProductsController@search");

Route::get("/products/add", "ProductsController@add")->middleware("auth");

Route::post("/products/add", "ProductsController@store")->middleware("auth");

Route::post("/products/delete", "ProductsController@delete")->middleware("auth");
