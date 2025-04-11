<?php

use App\Http\Controllers\Admin\AdminArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUnitsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Client\ClientHomeController;
use App\Http\Controllers\Client\ClientListCategoryController;
use App\Http\Controllers\Client\ClientListUnitController;
use App\Http\Controllers\Client\ClientLoginController;
use App\Http\Controllers\Client\ClientRegisterController;
use App\Http\Controllers\Client\ClientShowPostController;
use App\Http\Controllers\Client\ClientShowUnitController;

// clients
Route::get('/', [ClientHomeController::class, 'index'])->name('client.home');
// Route::get('/client/showpost', [ClientShowPostController::class, 'index'])->name('client.showpost');
Route::get('/client/listcategory', [ClientListCategoryController::class, 'index'])->name('client.listcategory');
Route::get('/client/showpost/{id}', [ClientShowPostController::class, 'show'])->name('client.showpost');
Route::get('/client/listunit', [ClientListUnitController::class, 'index'])->name('client.listunit');
Route::get('/client/showunit/{id}', [ClientShowUnitController::class, 'index'])->name('client.showunit');
Route::get('/client/register', [ClientRegisterController::class, 'showRegisterForm'])->name('client.register.form');
Route::post('/client/register/personal', [ClientRegisterController::class, 'registerPersonal'])->name('client.register.personal');
Route::post('/client/register/business', [ClientRegisterController::class, 'registerBusiness'])->name('client.register.business');
Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login.form');
Route::post('/client/login', [ClientLoginController::class, 'login'])->name('client.login');
Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');


// Admin
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/create', [AdminArticlesController::class, 'create'])->middleware('auth')->name('article.create');
        Route::get('/categories/search', [AdminCategoryController::class, 'search'])->name('categories.search');
        Route::get('/nantangs/search', [AdminUnitsController::class, 'search'])->name('units.search');
        Route::resource('index', AdminDashboardController::class);
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('news', NewsController::class);
        Route::resource('articles', AdminArticlesController::class);
        Route::resource('units', AdminUnitsController::class);
    });
});
