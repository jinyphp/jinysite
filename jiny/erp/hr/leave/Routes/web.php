<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


// 인증 사용자 라우트
//
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('hr.')->group(function () {

        ## 휴가
        Route::get('/vacation', [
            \Jiny\Erp\Hr\Leave\Http\Controllers\Admin\VacationController::class,
            "index"
        ]);

        ## 휴가신청 -> 년차,반차,월차
    });
});


// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        // 휴가
        Route::get('vacation', [
            \Jiny\Erp\Hr\Leave\Http\Controllers\Admin\VacationController::class,
            "index"
        ]);

        // 휴가목록
        Route::get('/leave/type', [
            \Jiny\Erp\Hr\Leave\Http\Controllers\Admin\LeaveTypeController::class,
            "index"
        ]);

        // 휴가신청
        Route::get('/leave/request', [
            \Jiny\Erp\Hr\Leave\Http\Controllers\Admin\RequestLeaveController::class,
            "index"
        ]);


    });
});


