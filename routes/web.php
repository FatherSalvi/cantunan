<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home']);
Route::get('/home',[HomeController::class,'home'])->name('home.index');

Route::get('/admin/index', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/add_food',[AdminController::class, 'add_food']);
Route::get('/view_food',[AdminController::class, 'view_food']);
Route::post('/upload_food',[AdminController::class, 'upload_food']);

Route::get('/delete_food/{id}',[AdminController::class, 'delete_food']);
Route::get('/update_food/{id}',[AdminController::class, 'update_food']);
Route::post('/edit_food/{id}',[AdminController::class, 'edit_food']);

Route::post('/add_cart', [HomeController::class, 'add_cart'])->name('add_cart');
Route::get('/my_cart', [HomeController::class, 'my_cart'])->name('my_cart');
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::post('/confirm_order', [HomeController::class, 'confirm_order']);

Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/finished_orders', [AdminController::class, 'finished_orders']);
Route::post('/admin/orders/{id}/update-status', [AdminController::class, 'updateOrderStatus'])->name('admin.order.updateStatus');
Route::post('/admin/orders/{id}/update-delivery-status', [AdminController::class, 'updateDeliveryStatus'])->name('admin.order.updateDeliveryStatus');

Route::get('/order_status',[HomeController::class, 'order_status'])->name('order_status');

require __DIR__.'/auth.php';
