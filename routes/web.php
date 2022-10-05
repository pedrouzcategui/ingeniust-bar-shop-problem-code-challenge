<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home');
});

Route::prefix("store")->group(function(){
    Route::get("/", function(){
        return view("store.products");
    });
    Route::get("/{product_name}", function($name){
        return view("store.products");
    });
});

Route::middleware(['auth'])->prefix("/admin")->group(function(){
    Route::get("/", function(){
        return view("admin.dashboard");
    });
    Route::prefix("/products")->group(function(){
        Route::get("/", function(){ // I could nest this as well
            return view("admin.products");
        });
        Route::get("/create", function(){
            return view("admin.products.create");
        });
        Route::get("/{id}", function($id){
            return view("admin.products.edit");
        });
        Route::post("/", function(Request $request){
            # Logic to do create.
        });
        Route::put("/{id}", function(Request $request, $id){
            # Logic to update.
        });
        Route::delete("/{id}", function(Request $request, $id){
            # Logic to delete.
        });
    });
});


// Handle 404 Routes
// Implement Route Groups for Product Views both in Store and Admin ✅