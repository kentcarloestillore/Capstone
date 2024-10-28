<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParishionerController;
use App\Http\Controllers\BaptismalController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PamisaController;
use App\Http\Controllers\ScheduleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/baptismals', [BaptismalController::class, 'index']);
Route::get('/confirmations', [ConfirmationController::class, 'index']);
Route::get('/marriages', [MarriageController::class, 'index']);
Route::get('/deaths', [DeathController::class, 'index']);
// Route::get('/receipt/create', [ReceiptController::class, 'create']);
Route::get('/receipts/{church_id}', [ReceiptController::class, 'index']);
Route::get('/donations/{church_id}', [DonationController::class, 'index']);

Route::get('/pamisas/{church_id}', [PamisaController::class, 'index']);
Route::get('/schedules/{church_id}', [ScheduleController::class, 'index']);
