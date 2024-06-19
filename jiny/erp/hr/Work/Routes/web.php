<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * 사용자 HR 경로
 */
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/hr/user')->name('jiny.hr.')->group(function () {

        ## 근무기록 - 출퇴근일지
        Route::get('/work/time', [
            \Jiny\Erp\Hr\Work\Http\Controllers\User\WorkTimeController::class,
            "index"
        ]);

        Route::get('/work/status', [
            \Jiny\Erp\Hr\Work\Http\Controllers\User\HrUserWorkStatus::class,
            "index"
        ]);

        Route::get('/work/type', [
            \Jiny\Erp\Hr\Work\Http\Controllers\User\HrUserWorkType::class,
            "index"
        ]);



    });
});

// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/hr/admin')->name('admin.hr.')->group(function () {

        // 근무 유형 정의
        Route::get('work/type', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkTypeController::class,
            "index"
        ]);

        ## 근무시간 기록
        Route::get('work/time', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkTimeController::class,
            "index"
        ]);

        ## 초과근무 관리
        Route::get('work/overtime', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkOverTimeController::class,
            "index"
        ]);

        ## 근무유형 지정
        Route::get('/work/assign', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkAssignController::class,
            "index"
        ]);

        ## 근무유형 지정
        Route::get('/work/status', [
            \Jiny\Erp\Hr\Work\Http\Controllers\Admin\WorkStatusController::class,
            "index"
        ]);

    });
});
