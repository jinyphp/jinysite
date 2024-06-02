<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


// 인증 사용자 라우트
//
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/hr')->name('hr.')->group(function () {

        Route::get('/', function () {
            return view('jinyerp-hr::hr.home');
        });

        ## 근무기록 - 출퇴근일지
        Route::get('/worktime', [
            \Jiny\Erp\Hr\Http\Controllers\User\WorkTimeController::class,
            "index"
        ]);

    });
});


// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        // Admin 데쉬보드
        Route::get('/', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\DashboardController::class,
            "index"
        ]);

        Route::get('/employee', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\EmployeeController::class,
            "index"
        ]);

        ## 직급
        Route::get('/position', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\PositionController::class,
            "index"
        ]);

        // 입사 후 새로운 직위를 배정 또는 승진을 발령합니다.
        // Onboarding
        Route::get('/onboarding', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\OnboardingController::class,
            "index"
        ]);

        ## 부서
        Route::get('/division',[
            \Jiny\Erp\Hr\Http\Controllers\Admin\DivisionController::class,
            "index"
        ]);

        // 근무형태
        Route::get('worktype', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\WorkTypeController::class,
            "index"
        ]);

        ## 근무시간
        Route::get('worktime', [
            \Jiny\Erp\Hr\Http\Controllers\Admin\WorkTimeController::class,
            "index"
        ]);



    });
});
