<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('jiny.hr.')->group(function () {
        Route::get('/', function () {
            return view('jinyerp-hr-home::hr.home');
        });
    });
});


// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        // Admin 데쉬보드
        Route::get('/', [
            \Jiny\Erp\Hr\Home\Http\Controllers\Admin\DashboardController::class,
            "index"
        ]);



    });
});
