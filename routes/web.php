<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::prefix("/store")->group(function(){
    Route::get("/", [ProductController::class, 'index']);
    Route::get("/product/{id}", [ProductController::class, 'show']);
});

Route::middleware(['auth'])->prefix("/admin")->group(function(){
    Route::get("/", [AdminController::class , 'index']);
    Route::prefix("/products")->group(function(){
        Route::get("/create",[ProductController::class, 'create']);
        Route::post("/save", [ProductController::class,'save']);
        Route::get("/edit/{id}",[ProductController::class,'edit']);
        Route::put("/update/{id}", [ProductController::class,'update']);
        Route::delete("/delete/{id}", [ProductController::class, 'delete']);
    });
});

Route::get('/login',function(){
    return view("auth.login");
});

Route::post('/login',[UserController::class,'verify']);
Route::post('/logout',[UserController::class,'logout']);


Route::get('/register',function(){
    return view("auth.register");
});

Route::post('/user/create',[UserController::class,'create']);

// Handle 404 Routes
// Implement Route Groups for Product Views both in Store and Admin ✅