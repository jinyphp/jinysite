<?php
## 인력pool
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('jiny.hr.')->group(function () {



    });
});

// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        // 최저시급
        Route::get('/recruit/plan', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitPlan::class,
            "index"
        ]);

    });
});
