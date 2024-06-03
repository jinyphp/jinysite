<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('jiny.hr.')->group(function () {

        ## 근무기록 - 출퇴근일지
        Route::get('/worktime', [
            \Jiny\Erp\Hr\Work\Http\Controllers\User\WorkTimeController::class,
            "index"
        ]);

    });
});

// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        // 근무형태
        Route::get('worktype', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkTypeController::class,
            "index"
        ]);

        ## 근무시간
        Route::get('worktime', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkTimeController::class,
            "index"
        ]);

    });
});
