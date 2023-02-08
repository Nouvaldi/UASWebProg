<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\RouteGroup;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('index', [
            'title' => 'Index'
        ]);
    })->name('index');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
    Route::get('/logout', [LoginController::class, 'logoutIndex'])->name('logout.index');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ItemController::class, 'index'])->name('home');
    Route::get('/detail/{item_id}', [ItemController::class, 'detail'])->name('detail');

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::post('/order/{item_id}', [OrderController::class, 'store'])->name('order.store');
    Route::delete('/order/delete/{item_id}', [OrderController::class, 'delete'])->name('order.delete');
    Route::delete('/order/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
    Route::get('/order/checkout/success', [OrderController::class, 'checkoutSuccess'])->name('order.checkout.success');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/success', [ProfileController::class, 'updateSuccess'])->name('profile.success');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/maintenance', [AdminController::class, 'index'])->name('admin');
    Route::delete('/admin/delete/{user_id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/admin/update/{user_id}', [AdminController::class, 'indexUpdate'])->name('admin.update');
    Route::post('/admin/update/{user_id}', [AdminController::class, 'update'])->name('admin.update.role');
});
