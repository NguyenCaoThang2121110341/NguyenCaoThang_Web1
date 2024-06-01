<?php

//site
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanPhamController;
use App\Http\Controllers\frontend\ContactController as LienHeController;
use App\Http\Controllers\frontend\PostController;
// admin
use App\Http\Controllers\backend\DashBoardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BrandController;

Route::get("/",[HomeController::class,'index'])->name('site.home');
Route::get("/san-pham",[SanPhamController::class,"index"])->name('site.product'); 
Route::get("/chi-tiet-san-pham/{slug}",[SanPhamController::class,"detail"])->name('site.product.detail');
Route::get("/lien-he",[LienHeController::class,"index"])->name('site.contact');
Route::get("/bai-viet",[PostController::class,"index"])->name('site.post');

// admin
Route::prefix("admin")->group(function (){

    Route::get("/",[DashBoardController::class,'index'])->name('backend.index');

    //product
    Route::prefix("product")->group(function (){
        Route::get("/",[ProductController::class,'index'])->name('admin.product.index');
        Route::get("/trash",[ProductController::class,'trash'])->name('admin.product.trash');
        Route::get("/show/{id}",[ProductController::class,'show'])->name('admin.product.show');
        Route::post("/store",[ProductController::class,'store'])->name('admin.product.index');
        Route::get("/edit/{id}",[ProductController::class,'edit'])->name('admin.product.edit');
        Route::put("/update/{id}",[ProductController::class,'update'])->name('admin.product.update');
        Route::get("/delete/{id}",[ProductController::class,'delete'])->name('admin.product.delete');
        Route::get("/restore/{id}",[ProductController::class,'restore'])->name('admin.product.restore');
        Route::delete("/destroy/{id}",[ProductController::class,'destroy'])->name('admin.product.destroy');

    });

    //category
    Route::prefix("category")->group(function (){
        Route::get("/",[CategoryController::class,'index'])->name('backend.category.index');
        Route::get("/trash",[CategoryController::class,'trash'])->name('admin.category.trash');
        Route::get("/show/{id}",[CategoryController::class,'show'])->name('admin.category.show');
        Route::post("/store",[CategoryController::class,'store'])->name('backend.category.store'); 
        Route::get("/edit/{id}",[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put("/update/{id}",[CategoryController::class,'update'])->name('admin.category.update');
        Route::get("/delete/{id}",[CategoryController::class,'delete'])->name('admin.category.delete');
        Route::get("/restore/{id}",[CategoryController::class,'restore'])->name('admin.category.restore');
        Route::delete("/destroy/{id}",[CategoryController::class,'destroy'])->name('admin.category.destroy');
    });
    Route::prefix("banner")->group(function (){
        Route::get("/",[BannerController::class,'index'])->name('backend.banner.index');
        Route::get("/trash",[BannerController::class,'trash'])->name('admin.banner.trash');
        Route::get("/show/{id}",[BannerController::class,'show'])->name('admin.banner.show');
        Route::post("/store",[BannerController::class,'store'])->name('backend.banner.store');
        Route::get("/edit/{id}",[BannerController::class,'edit'])->name('admin.banner.edit');
        Route::put("/update/{id}",[BannerController::class,'update'])->name('admin.banner.update');
        Route::get("/delete/{id}",[BannerController::class,'delete'])->name('admin.banner.delete');
        Route::get("/restore/{id}",[BannerController::class,'restore'])->name('admin.banner.restore');
        Route::delete("/destroy/{id}",[BannerController::class,'destroy'])->name('admin.banner.destroy');

    });
    Route::prefix("brand")->group(function (){
        Route::get("/",[BrandController::class,'index'])->name('backend.brand.index');
        Route::get("/trash",[BrandController::class,'trash'])->name('admin.brand.trash');
        Route::get("/show/{id}",[BrandController::class,'show'])->name('admin.brand.show');
        Route::post("/store",[BrandController::class,'store'])->name('backend.brand.store');
        Route::get("/edit/{id}",[BrandController::class,'edit'])->name('admin.brand.edit');
        Route::put("/update/{id}",[BrandController::class,'update'])->name('admin.brand.update');
        Route::get("/delete/{id}",[BrandController::class,'delete'])->name('admin.brand.delete');
        Route::get("/restore/{id}",[BrandController::class,'restore'])->name('admin.brand.restore');
        Route::delete("/destroy/{id}",[BrandController::class,'destroy'])->name('admin.brand.destroy');

    });

});