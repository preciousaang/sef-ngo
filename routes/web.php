<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Livewire\Admin\Images\Edit;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [FrontendController::class, 'home'])->name('homepage');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactUs'])->name('contact-us');
Route::post('/newsletter', [FrontendController::class, 'joinNewsLetter'])->name('join-newsletter');
Route::get('/unsubscribe', [FrontendController::class, 'unsubscribeNewsLetter'])->name('unsubscribe');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/news/{slug}', [FrontendController::class, 'newsDetail'])->name('news-detail');



Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'form'])->name('login');
    Route::get('/forgot-password', [ResetPasswordController::class, 'form'])->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'emailLink'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::any('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::prefix('admin')->group(function () {
        Route::get('/change-password', [DashboardController::class, 'changePasswordForm'])->name('change-password-form');
        Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('change-password');
        Route::get('team', [DashboardController::class, 'team'])->name('admin-team');
        Route::get('team/{id}/edit', [DashboardController::class, 'editTeam'])->name('admin-team-edit');
        Route::get('team/{id}/delete', [DashboardController::class, 'deleteTeam'])->name('admin-team-delete');
        Route::patch('team', [DashboardController::class, 'updateTeamOrder'])->name('update-team');
        Route::get('/partners', [DashboardController::class, 'partners'])->name('admin-partners');
        Route::patch('/partners', [DashboardController::class, 'sortPartners'])->name('admin-partner-sort');
        Route::get('/partners/{id}/edit', [DashboardController::class, 'editPartner'])->name('admin-partner-edit');
        Route::get('/partners/{id}/delete', [DashboardController::class, 'deletePartner'])->name('admin-partner-delete');
        Route::get('/projects', [DashboardController::class, 'projects'])->name('admin-projects');
        Route::patch('/projects', [DashboardController::class, 'sortProjects'])->name('admin-project-sort');
        Route::get('/projects/{id}/edit', [DashboardController::class, 'editProject'])->name('admin-project-edit');
        Route::get('/projects/{id}/delete', [DashboardController::class, 'deleteProject'])->name('admin-project-delete');

        Route::get('/galleries', [DashboardController::class, 'galleries'])->name('admin-galleries');
        Route::get('/galleries/{id}/edit', [DashboardController::class, 'editGallery'])->name('admin-gallery-edit');
        Route::get('galleries/{id}/delete', [DashboardController::class, 'deleteGallery'])->name('admin-gallery-delete');

        Route::patch('/images', [DashboardController::class, 'sortImages'])->name('admin-images-sort');
        Route::patch('/galleries', [DashboardController::class, 'sortGalleries'])->name('admin-galleries-sort');
        Route::get('images/{id}/edit', [DashboardController::class, 'editImage'])->name('admin-image-edit');
        Route::get('images/{id}/delete', [DashboardController::class, 'deleteImage'])->name('admin-image-delete');

        Route::get('/news', [DashboardController::class, 'news'])->name('admin-news');
        Route::get('/news/create', [DashboardController::class, 'createNews'])->name('admin-create-news');
        Route::post('/news/create', [DashboardController::class, 'storeNews'])->name('admin-store-news');

        Route::get('news/{id}/edit', [DashboardController::class, 'editNews'])->name('admin-news-edit');
        Route::patch('news/{id}/edit', [DashboardController::class, 'updateNews'])->name('admin-update-news');

        Route::get('/news/{id}/delete', [DashboardController::class, 'deleteNews'])->name('admin-news-delete');
        Route::get('/mailable', function () {
            return new App\Mail\NewsLetter(App\Models\News::find(1), 'pr@mail.com');
        });
    });
});
