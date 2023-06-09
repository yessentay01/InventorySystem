<?php

use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookingController;
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
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/feedback', [WelcomeController::class, 'feedback'])->name('feedback');


Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('index.login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');



Route::middleware('auth')->group(function () {

    Route::get('/signout', [SignoutController::class, 'signOut'])->name('logout');

    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/catalog/{id}', [CatalogController::class, 'detail'])->name('catalog.detail');
    Route::get('/catalog/favorites/{id}', [CatalogController::class , 'addToFavorites'])->name('catalog.favorites');

    Route::get('/favorites', [CatalogController::class, 'favorites'])->name('favorites');

    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedbackView');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'showEdit'])->name('profile.showEdit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Booking
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/{id}/delete', [BookingController::class, 'destroy'])->name('booking.destroy');

    // Item
    Route::controller(ItemController::class)->prefix('item')->name('item')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'showAdd')->name('.showAdd');
        Route::post('/add', 'store')->name('.store');
        Route::get('/report', 'report')->name('.report');
        Route::get('/{id}/delete', 'destroy')->name('.destroy');
        Route::get('/{id}/edit', 'showEdit')->name('.showEdit');
        Route::post('/{id}/edit', 'update')->name('.update');
    });

    // Supplier
    Route::controller(SupplierController::class)->prefix('supplier')->name('supplier')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'showAdd')->name('.showAdd');
        Route::post('/add', 'store')->name('.store');
        Route::get('/{id}/delete', 'destroy')->name('.destroy');
        Route::get('/{id}/edit', 'showEdit')->name('.showEdit');
        Route::post('/{id}/edit', 'update')->name('.update');
    });

    // Category
    Route::controller(CategoryController::class)->prefix('category')->name('category')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'showAdd')->name('.showAdd');
        Route::post('/add', 'store')->name('.store');
        Route::get('/{id}/delete', 'destroy')->name('.destroy');
        Route::get('/{id}/edit', 'showEdit')->name('.showEdit');
        Route::post('/{id}/edit', 'update')->name('.update');
    });

    // Department
    Route::controller(DepartmentController::class)->prefix('department')->name('department')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'showAdd')->name('.showAdd');
        Route::post('/add', 'store')->name('.store');
        Route::get('/{id}/delete', 'destroy')->name('.destroy');
        Route::get('/{id}/edit', 'showEdit')->name('.showEdit');
        Route::post('/{id}/edit', 'update')->name('.update');
    });

    // Borrower
    Route::controller(BorrowerController::class)->prefix('borrower')->name('borrower')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'showAdd')->name('.showAdd');
        Route::post('/add', 'store')->name('.store');
        Route::get('/report', 'reports')->name('.report');
        Route::get('/{id}/delete', 'destroy')->name('.destroy');
        Route::get('/{id}/edit', 'showEdit')->name('.showEdit');
        Route::post('/{id}/edit', 'update')->name('.update');
    });



});
