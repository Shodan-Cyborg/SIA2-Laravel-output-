<?php

/* use App\Http\Controllers\TableContoller; */

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/transactionssiaactivity1', [TransactionController::class, 'getTransactionData1']);
Route::get('/transactionssiaactivity2', [TransactionController::class, 'getTransactionData2']);
Route::get('/transactionssiaactivity3', [TransactionController::class, 'getTransactionData3']);
Route::get('/transactionssiaactivity4', [TransactionController::class, 'getTransactionData4']);

Route::get('/dashboard', [TransactionController::class, 'viewDashboard']);
Route::get('/transactionlogs', [TransactionController::class, 'viewTransaction']);

Route::get('/products', [ProductController::class, 'viewProducts'])->name('products.viewProducts');




//This route is for SIA2 Lab Activity
/* Route::get('/display', [TableContoller::class, 'DisplayPage']); */


