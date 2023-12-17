<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\LoginController;
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
Route::redirect('/', 'home');

Route::prefix('home')->middleware('auth')->group(function (){
    // Hiển thị trang bán hàng
    Route::get('/', [SellingController::class, 'index']);    
    Route::get('/selling', [SellingController::class, 'index']);

    // Tạo và lưu trữ hóa đơn vào cở sở dữ liệu
    Route::post('/selling/checkout', [SellingController::class, 'store'])->name('selling.checkout');

    // Thêm sản phẩm vào phiếu hóa đơn
    Route::get('/selling/add/{id?}', [SellingController::class, 'addCart'])->name('selling.add');

    // Cập nhập số lượng sản phẩm trong phiếu hóa đơn
    Route::patch('/selling/update', [SellingController::class, 'updateCart'])->name('selling.update');

    // Xóa 1 sản phẩm ra khỏi phiếu hóa đơn
    Route::delete('/selling/delete', [SellingController::class, 'deleteCart'])->name('selling.delete');

    // Xóa tất cả sản phẩm trong phiếu hóa đơn
    Route::delete('/selling/delteall', [SellingController::class, 'deleteAllCart'])->name('selling.deleteall');

    // Hiển thị các sản phẩm cần tìm
    Route::get('/selling/search', [SellingController::class, 'search'])->name('selling.search');
});

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('checklogin');
Route::post('login', [LoginController::class, 'dologin'])->name('dologin');
Route::post('logout', [LoginController::class, 'dologout'])->name('dologout');

