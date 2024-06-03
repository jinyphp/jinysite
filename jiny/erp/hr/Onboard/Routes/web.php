<?php
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

        ## 직급
        Route::get('/position', [
            \Jiny\Erp\Hr\Onboard\Http\Controllers\Admin\PositionController::class,
            "index"
        ]);

        // 입사 후 새로운 직위를 배정 또는 승진을 발령합니다.
        // Onboarding
        Route::get('/onboard', [
            \Jiny\Erp\Hr\Onboard\Http\Controllers\Admin\OnboardController::class,
            "index"
        ]);

        ## 부서
        Route::get('/division',[
            \Jiny\Erp\Hr\Onboard\Http\Controllers\Admin\DivisionController::class,
            "index"
        ]);

        ## 인사발령 (Personnel Appointment)
        ## 인사이동 (Personnel Transfer)
        ## 부서발령
        //Route::resource('personnel', \Jiny\Hr\Http\Controllers\Admin\PersonnelController::class);


        ## 직급변경통지

    });
});


