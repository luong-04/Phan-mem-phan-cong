<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProctorController;

// Khi mở app lên sẽ chạy thẳng vào giao diện phân công
Route::get('/', [ProctorController::class, 'index']);

// Các API xử lý của bạn
Route::post('/proctors/assign', [ProctorController::class, 'assign'])->name('proctors.assign');
Route::get('/proctors/{id}/history', [ProctorController::class, 'showHistory']);
Route::delete('/proctors/{id}', [ProctorController::class, 'destroy']);