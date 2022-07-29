<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// 詳細モーダル取得
Route::get('/api/dashboard/detail/{id}', [DashboardController::class, 'detail'])->name('dashboard.detail');

// 支払い追加画面
Route::get('/payment/add', function () {
    return view('payment.add');
})->middleware(['auth'])->name('payment.add');

// 参加者選択
Route::get('/payment/select_participants', [PaymentController::class, 'selectParticipants'])->name('payment.selectParticipants');
// 支払い登録
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');

require __DIR__.'/auth.php';
