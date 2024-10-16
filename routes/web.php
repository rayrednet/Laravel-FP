<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\Category;

// Home route
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Menu Route
    Route::get('/menus', function () {
        $menus = Menu::with('category')->get();
        $categories = Category::all();
        return view('menus', ['menus' => $menus, 'categories' => $categories]);
    });

    Route::get('/menus/{menu:slug}', function (Menu $menu) {
        $menu->load('category', 'chef');
        return view('menu', ['menu' => $menu]);
    });

    // Categories Route
    Route::get('/categories/{slug}', [CategoryController::class, 'index'])->name('categories.index');

    // Chef Routes
    Route::get('/chefs', function () {
        return view('chefs', ['title' => 'Chefs Page']);
    });
    Route::get('/chefs/{slug}', [ChefController::class, 'filterByCategory'])->name('chefs.filterByCategory');
    Route::get('/chef/{slug}', [ChefController::class, 'show'])->name('chefs.show');

    // Order Routes
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/order/menu/{id}/increment', [OrderController::class, 'increment'])->name('order.increment');
    Route::post('/order/menu/{id}/decrement', [OrderController::class, 'decrement'])->name('order.decrement');
    
    Route::post('/order/menu/{id}', [OrderController::class, 'deleteMenuOrder'])->name('order.deleteMenuOrder');
    Route::post('/order/submit', [OrderController::class, 'submitOrder'])->name('order.submit');
    
    Route::post('/order/{slug}', [OrderController::class, 'addMenu'])->name('order.addMenu');
    Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');
    
    // Order History Routes
    Route::get('/history', function () {
        return view('history', ['title' => 'Order History Page']);
    });
});

// Authentication routes
require __DIR__ . '/auth.php';