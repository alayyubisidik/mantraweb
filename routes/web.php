<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('pages.home');
    Route::get('/about', 'about')->name('pages.about');
    Route::get('/team', 'team')->name('pages.team');
    Route::get('/contact', 'contact')->name('pages.contact');

    Route::get('/order/{slug}', 'order')->name('pages.order');
    Route::post('/order/{slug}', 'orderStore')->name('pages.order.store');
    Route::get('/order-success', 'orderSuccess')->name('pages.order.success');

    Route::get('/project', 'project')->name('pages.project');
    Route::get('/project/{slug}', 'projectDetail')->name('pages.project.detail');

    Route::get('/products', 'products')->name('pages.products');
    Route::get('/products/{slug}', 'productDetail')->name('pages.product.detail');
});

Route::middleware("auth")
    ->prefix("dashboard")
    ->group(function () {
        Route::get('', [DashboardController::class, "index"])->name('dashboard');

        Route::get('logout', [AuthController::class, "logout"])->name('logout');

        Route::resource('teams', TeamController::class);

        Route::resource('categories', CategoryController::class);

        Route::resource('features', FeatureController::class);

        Route::resource('sections', SectionController::class);

        Route::resource('products', ProductController::class);

        Route::resource('clients', ClientController::class);

        Route::resource('projects', ProjectController::class);

        Route::resource('testimonials', TestimonialController::class);


    });

Route::middleware(["admin"])
    ->prefix("dashboard")
    ->group(function () {
        Route::resource('users', UserController::class);
    });

Route::middleware("guest")->group(function () {
    Route::match(['GET', 'POST'], 'login', [AuthController::class, "login"])->name('login');
});