<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/service', [HomeController::class, 'service'])->name("home.service");
Route::get('/faq', [HomeController::class, 'faq'])->name("home.faq");
Route::get('/syarat-ketentuan', [HomeController::class, 'syaratKetentuan'])->name("home.syarat-ketentuan");
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name("home.privacy-policy");

Route::get('/contact', [ContactController::class, 'index'])->name("contact.index");

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.login.authenticate');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
