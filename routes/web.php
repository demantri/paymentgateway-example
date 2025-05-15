<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\XenditController;

Route::get('/pay', [XenditController::class, 'showForm']);
Route::post('/pay', [XenditController::class, 'createInvoice'])->name('pay');

use App\Http\Controllers\MidtransController;

Route::get('/midtrans', [MidtransController::class, 'form']);
Route::post('/midtrans/pay', [MidtransController::class, 'pay'])->name('midtrans.pay');

