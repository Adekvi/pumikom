<?php

use App\Http\Controllers\Admin\Master\AdminController;
use Illuminate\Support\Facades\Route;

// User
Route::get('/', function () {
    return view('index');
});

// ADMIN MASTER
Route::get('admin/dashboard', [AdminController::class, 'index']);
