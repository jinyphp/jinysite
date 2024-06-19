<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('jiny.hr.')->group(function () {



    });
});


// HR 업무페이지
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix("/hr/admin")->name('hr.admin')->group(function () {

        ## 부서
        Route::get('/division',[
            \Jiny\Erp\Hr\Move\Http\Controllers\Admin\DivisionController::class,
            "index"
        ]);


    });
});



// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        ## 직급 종류
        Route::get('/position', [
            \Jiny\Erp\Hr\Move\Http\Controllers\Admin\PositionController::class,
            "index"
        ]);

        ## 인사이동 (Personnel Transfer)
        ## 직급변경
        Route::get('/position/move', [
            \Jiny\Erp\Hr\Move\Http\Controllers\Admin\PositionMove::class,
            "index"
        ]);



        ## 인사발령 (Personnel Appointment)
        ## 부서발령
        Route::get('/division/move', [
            \Jiny\Erp\Hr\Move\Http\Controllers\Admin\DivisionMove::class,
            "index"
        ]);



        // 입사 후 새로운 직위를 배정 또는 승진을 발령합니다.
        // Onboarding
        Route::get('/onboard', [
            \Jiny\Erp\Hr\Move\Http\Controllers\Admin\OnboardController::class,
            "index"
        ]);




    });
});


