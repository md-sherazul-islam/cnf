<?php

use App\Http\Controllers\LCController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/dashboard/clients',[UserController::class,'clients'])->name('clients');
    Route::get('/dashboard/add/clients',[UserController::class,'addClientsPage'])->name('add.clients');
    Route::post('/dashboard/post/client', [UserController::class, 'addClient'])->name('post.client');

    Route::get('/dashboard/orders', [LCController::class,'orders'])->name('orders');
    Route::get('/dashboard/add/order',[LCController::class,'addOrder'])->name('add.order');
    Route::post('/dashboard/post/order',[LCController::class, 'postOrder'])->name('post.order');
    Route::get('/dashboard/order/{id}', [LCController::class, 'orderDetails'])->name('order.details');
    Route::get('/dashboard/order/{id}/edit',[LCController::class, 'editOrder'])->name('edit.order');
    Route::put('/dashboard/order/{id}/update',[LCController::class, 'update'])->name('update.order');
});

Route::group(['middleware' => ['client']],function(){
    Route::get('/my-account',[MyaccountController::class,'my_account'])->name('client.account');
    Route::get('/my-account/order/{id}', [LCController::class, 'orderDetails'])->name('client.order.details');
    //Route::get('/orders',[MyaccountController::class,'orders'])->name('client.orders');
});

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::get('/create/admin', [LoginController::class, 'createAdmin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
