<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;


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

//home section
    Route::get('/dashboard/home', [HomeController::class, 'index'])->name('dashboard.home');
    Route::get('/dashboard/home/manage', [HomeController::class, 'home_manage'])->name('dashboard.home_manage');


//About section
    Route::get('/dashboard/about', [AboutController::class, 'index'])->name('dashboard.about');
    Route::post('/dashboard/about/create', [AboutController::class, 'about_create'])->name('dashboard.about_create');
    Route::get('/dashboard/about/manage', [AboutController::class, 'about_manage'])->name('dashboard.about_manage');
    Route::get('/dashboard/about/manage/detail/{id}', [AboutController::class, 'about_detail'])->name('dashboard.about_detail');
    Route::get('/dashboard/about/manage-status/{id}', [AboutController::class, 'updateStatus'])->name('dashboard.about-update-status');
    Route::get('/dashboard/about/manage/edit/{id}', [AboutController::class, 'edit'])->name('dashboard.about_edit');
    Route::post('/dashboard/about/manage/update/{id}', [AboutController::class, 'update'])->name('dashboard.about_update');
    Route::get('/dashboard/about/manage/delete/{id}', [AboutController::class, 'delete'])->name('dashboard.about_delete');


//Resume section
    Route::get('/dashboard/resume', [ResumeController::class, 'index'])->name('dashboard.resume');
    Route::post('/dashboard/resume/yourself', [ResumeController::class, 'index_resume_create'])->name('dashboard.resume-index');
    Route::get('/dashboard/Add-resume', [ResumeController::class, 'resume'])->name('dashboard.resume.add');
    Route::post('/dashboard/Create-resume', [ResumeController::class, 'resume_create'])->name('dashboard.resume-create');
    Route::get('/dashboard/resume/manage', [ResumeController::class, 'resume_manage'])->name('dashboard.resume_manage');


//Services section
    Route::get('/dashboard/services', [DashboardController::class, 'services'])->name('dashboard.services');
    Route::get('/dashboard/services/manage', [DashboardController::class, 'services_manage'])->name('dashboard.services_manage');


//Services section
    Route::get('/dashboard/skill', [DashboardController::class, 'skill'])->name('dashboard.skill');
    Route::get('/dashboard/skill/manage', [DashboardController::class, 'skill_manage'])->name('dashboard.skill_manage');


//Project section
    Route::get('/dashboard/project', [DashboardController::class, 'project'])->name('dashboard.project');
    Route::get('/dashboard/project/manage', [DashboardController::class, 'project_manage'])->name('dashboard.project_manage');


//Contact section
    Route::get('/dashboard/contact', [DashboardController::class, 'contact'])->name('dashboard.contact');
    Route::get('/dashboard/contact/manage', [DashboardController::class, 'contact_manage'])->name('dashboard.contact_manage');


//Footer section
    Route::get('/dashboard/footer', [DashboardController::class, 'footer'])->name('dashboard.footer');
    Route::get('/dashboard/footer/manage', [DashboardController::class, 'footer_manage'])->name('dashboard.footer_manage');



//AdminAuthSection
    Route::get('/dashboard/admin/add', [AdminAuthController::class, 'index'])->name('dashboard.admin_add');
    Route::post('/dashboard/admin/create', [AdminAuthController::class, 'create'])->name('dashboard.admin_create');
    Route::get('/dashboard/admin/manage', [AdminAuthController::class, 'manage'])->name('dashboard.admin_manage');
    Route::get('/dashboard/admin/manage/delete/{id}', [AdminAuthController::class, 'delete'])->name('dashboard.admin_manage_delete');


});
