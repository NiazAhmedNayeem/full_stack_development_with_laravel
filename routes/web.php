<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;


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
    Route::post('/dashboard/home/create', [HomeController::class, 'create'])->name('dashboard.home-create');
    Route::get('/dashboard/home/manage', [HomeController::class, 'home_manage'])->name('dashboard.home_manage');
    Route::get('/dashboard/home/manage/detail/{id}', [HomeController::class, 'home_detail'])->name('dashboard.home_detail');
    Route::get('/dashboard/home/manage/edit/{id}', [HomeController::class, 'home_edit'])->name('dashboard.home_edit');
    Route::post('/dashboard/home/manage/update/{id}', [HomeController::class, 'home_update'])->name('dashboard.home_update');
    Route::get('/dashboard/home/manage/update-status/{id}', [HomeController::class, 'home_status'])->name('dashboard.home_status');
    Route::get('/dashboard/home/manage/delete/{id}', [HomeController::class, 'home_delete'])->name('dashboard.home_delete');


//About section
    Route::get('/dashboard/add-about', [AboutController::class, 'index'])->name('dashboard.about');
    Route::post('/dashboard/about/create', [AboutController::class, 'about_create'])->name('dashboard.about_create');
    Route::get('/dashboard/about/manage', [AboutController::class, 'about_manage'])->name('dashboard.about_manage');
    Route::get('/dashboard/about/manage/detail/{id}', [AboutController::class, 'about_detail'])->name('dashboard.about_detail');
    Route::get('/dashboard/about/manage-status/{id}', [AboutController::class, 'updateStatus'])->name('dashboard.about-update-status');
    Route::get('/dashboard/about/manage/edit/{id}', [AboutController::class, 'edit'])->name('dashboard.about_edit');
    Route::post('/dashboard/about/manage/update/{id}', [AboutController::class, 'update'])->name('dashboard.about_update');
    Route::get('/dashboard/about/manage/delete/{id}', [AboutController::class, 'delete'])->name('dashboard.about_delete');


//Resume section
//    Route::get('/dashboard/resume', [ResumeController::class, 'index'])->name('dashboard.resume');
//    Route::post('/dashboard/resume/yourself', [ResumeController::class, 'index_resume_create'])->name('dashboard.resume-index');

    Route::get('/dashboard/add-resume', [ResumeController::class, 'resume'])->name('dashboard.resume.add');
    Route::post('/dashboard/Create-resume', [ResumeController::class, 'resume_create'])->name('dashboard.resume-create');
    Route::get('/dashboard/resume/manage', [ResumeController::class, 'resume_manage'])->name('dashboard.resume_manage');
    Route::get('/dashboard/resume/manage/edit/{id}', [ResumeController::class, 'resume_edit'])->name('dashboard.resume_edit');
    Route::post('/dashboard/resume/manage/update/{id}', [ResumeController::class, 'resume_update'])->name('dashboard.resume_update');
    Route::get('/dashboard/resume/manage/detail/{id}', [ResumeController::class, 'resume_detail'])->name('dashboard.resume_detail');
    Route::get('/dashboard/resume/manage/resume_status/{id}', [ResumeController::class, 'resumeStatus'])->name('dashboard.resume_status');
    Route::get('/dashboard/resume/manage/resume_delete/{id}', [ResumeController::class, 'resume_delete'])->name('dashboard.resume_delete');



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
    Route::get('/dashboard/add-contact', [ContactController::class, 'index'])->name('dashboard.contact');
    Route::post('/dashboard/contact/create', [ContactController::class, 'contact_create'])->name('dashboard.contact_create');
    Route::get('/dashboard/contact/manage', [ContactController::class, 'contact_manage'])->name('dashboard.contact_manage');
    Route::get('/dashboard/contact/manage/detail/{id}', [ContactController::class, 'contact_detail'])->name('dashboard.contact_detail');
    Route::get('/dashboard/contact/manage/edit/{id}', [ContactController::class, 'contact_edit'])->name('dashboard.contact_edit');
    Route::post('/dashboard/contact/manage/contact-update/{id}', [ContactController::class, 'contact_update'])->name('dashboard.contact_update');
    Route::get('/dashboard/contact/manage/contact-status/{id}', [ContactController::class, 'contact_status'])->name('dashboard.contact_status');
    Route::get('/dashboard/contact/manage/contact-delete/{id}', [ContactController::class, 'contact_delete'])->name('dashboard.contact_delete');


//Footer section
    Route::get('/dashboard/footer', [FooterController::class, 'index'])->name('dashboard.footer');
    Route::post('/dashboard/footer/create', [FooterController::class, 'footer_create'])->name('dashboard.footer-create');
    Route::get('/dashboard/footer/manage', [FooterController::class, 'footer_manage'])->name('dashboard.footer_manage');
    Route::get('/dashboard/footer/manage/detail/{id}', [FooterController::class, 'footer_detail'])->name('dashboard.footer_detail');
    Route::get('/dashboard/footer/manage/edit/{id}', [FooterController::class, 'footer_edit'])->name('dashboard.footer_edit');



//AdminAuthSection
    Route::get('/dashboard/admin/add', [AdminAuthController::class, 'index'])->name('dashboard.admin_add');
    Route::post('/dashboard/admin/create', [AdminAuthController::class, 'create'])->name('dashboard.admin_create');
    Route::get('/dashboard/admin/manage', [AdminAuthController::class, 'manage'])->name('dashboard.admin_manage');
    Route::get('/dashboard/admin/manage/delete/{id}', [AdminAuthController::class, 'delete'])->name('dashboard.admin_manage_delete');


});
