<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('pages.home');
    Route::get('/about', 'about')->name('pages.about');
    Route::get('/team', 'team')->name('pages.team');
    Route::get('/project', 'project')->name('pages.project');
    Route::get('/contact', 'contact')->name('pages.contact');
});

Route::middleware("auth")->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

    Route::get('logout', [AuthController::class, "logout"])->name('logout');

    Route::get('/dashboard/team', [TeamController::class, "index"])->name('team.index');
    Route::match(['GET', 'POST'], '/dashboard/team/create', [TeamController::class, "create"])->name('team.create');
    Route::match(['GET', 'POST'], '/dashboard/team/update/{teamId}', [TeamController::class, "update"])->name('team.update');
    Route::get('/dashboard/team/delete/{teamId}', [TeamController::class, "delete"])->name('team.delete');

    Route::get('/dashboard/client', [ClientController::class, "index"])->name('client.index');
    Route::match(['GET', 'POST'], '/dashboard/client/create', [ClientController::class, "create"])->name('client.create');
    Route::match(['GET', 'POST'], '/dashboard/client/update/{clientId}', [ClientController::class, "update"])->name('client.update');
    Route::get('/dashboard/client/delete/{clientId}', [ClientController::class, "delete"])->name('client.delete');

    Route::get('/dashboard/service', [ServiceController::class, "index"])->name('service.index');
    Route::match(['GET', 'POST'], '/dashboard/service/create', [ServiceController::class, "create"])->name('service.create');
    Route::match(['GET', 'POST'], '/dashboard/service/update/{serviceId}', [ServiceController::class, "update"])->name('service.update');
    Route::get('/dashboard/service/delete/{serviceId}', [ServiceController::class, "delete"])->name('service.delete');

    Route::get('/dashboard/testimonial', [TestimonialController::class, "index"])->name('testimonial.index');
    Route::match(['GET', 'POST'], '/dashboard/testimonial/create', [TestimonialController::class, "create"])->name('testimonial.create');
    Route::match(['GET', 'POST'], '/dashboard/testimonial/update/{testimonialId}', [TestimonialController::class, "update"])->name('testimonial.update');
    Route::get('/dashboard/testimonial/delete/{testimonialId}', [TestimonialController::class, "delete"])->name('testimonial.delete');
    
    Route::get('/dashboard/project', [ProjectController::class, "index"])->name('project.index');
    Route::match(['GET', 'POST'], '/dashboard/project/create', [ProjectController::class, "create"])->name('project.create');
    Route::match(['GET', 'POST'], '/dashboard/project/update/{projectId}', [ProjectController::class, "update"])->name('project.update');
    Route::get('/dashboard/project/delete/{projectId}', [ProjectController::class, "delete"])->name('project.delete');
});

Route::middleware(["admin"])->group(function () {
    Route::get('/dashboard/user', [UserController::class, "index"])->name('user.index');
    Route::match(['GET', 'POST'], '/dashboard/user/create', [UserController::class, "create"])->name('user.create');
    Route::match(['GET', 'POST'], '/dashboard/user/update/{userId}', [UserController::class, "update"])->name('user.update');
    Route::get('/dashboard/user/delete/{userId}', [UserController::class, "delete"])->name('user.delete');
});

Route::middleware("guest")->group(function () {
    Route::match(['GET', 'POST'], 'login', [AuthController::class, "login"])->name('login');
});
