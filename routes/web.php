<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\GuestController;
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

Route::get('/', [GuestController::class, 'home'])->name('guest.home');
Route::get('/about', [GuestController::class, 'about'])->name('guest.about');
Route::get('/service', [GuestController::class, 'service'])->name('guest.service');
Route::get('/faq', [GuestController::class, 'faq'])->name('guest.faq');
Route::get('/syarat-ketentuan', [GuestController::class, 'syaratKetentuan'])->name('guest.syarat-ketentuan');
Route::get('/privacy-policy', [GuestController::class, 'privacyPolicy'])->name('guest.privacy-policy');
Route::get('/contact', [GuestController::class, 'contact'])->name('guest.contact');

Route::prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
        Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.login.authenticate');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('/notification', [NotificationController::class, 'index'])->name('admin.notification.index');
        Route::post('/notification', [NotificationController::class, 'delete'])->name('admin.notification.delete');

        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

        Route::get('/logout', [LogoutController::class, 'logout'])->name('admin.logout');
    });
});
