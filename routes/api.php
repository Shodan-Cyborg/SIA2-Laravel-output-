<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function(){
    Route::get('/transactionsrecord', [TransactionController::class, 'getTransactionRecord']);
});
