<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [WebsiteController::class, 'index']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/home', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/dashboard/home/manage', [DashboardController::class, 'home_manage'])->name('dashboard.home_manage');

    Route::get('/dashboard/about', [DashboardController::class, 'about'])->name('dashboard.about');
    Route::get('/dashboard/about/manage', [DashboardController::class, 'about_manage'])->name('dashboard.about_manage');

    Route::get('/dashboard/resume', [DashboardController::class, 'resume'])->name('dashboard.resume');
    Route::get('/dashboard/resume/manage', [DashboardController::class, 'resume_manage'])->name('dashboard.resume_manage');

    Route::get('/dashboard/services', [DashboardController::class, 'services'])->name('dashboard.services');
    Route::get('/dashboard/services/manage', [DashboardController::class, 'services_manage'])->name('dashboard.services_manage');

    Route::get('/dashboard/skill', [DashboardController::class, 'skill'])->name('dashboard.skill');
    Route::get('/dashboard/skill/manage', [DashboardController::class, 'skill_manage'])->name('dashboard.skill_manage');

    Route::get('/dashboard/project', [DashboardController::class, 'project'])->name('dashboard.project');
    Route::get('/dashboard/project/manage', [DashboardController::class, 'project_manage'])->name('dashboard.project_manage');

    Route::get('/dashboard/contact', [DashboardController::class, 'contact'])->name('dashboard.contact');
    Route::get('/dashboard/contact/manage', [DashboardController::class, 'contact_manage'])->name('dashboard.contact_manage');

    Route::get('/dashboard/footer', [DashboardController::class, 'footer'])->name('dashboard.footer');
    Route::get('/dashboard/footer/manage', [DashboardController::class, 'footer_manage'])->name('dashboard.footer_manage');




    Route::get('/dashboard/admin/add', [AdminAuthController::class, 'index'])->name('dashboard.admin_add');
    Route::post('/dashboard/admin/create', [AdminAuthController::class, 'create'])->name('dashboard.admin_create');
    Route::get('/dashboard/admin/manage', [AdminAuthController::class, 'manage'])->name('dashboard.admin_manage');


});
