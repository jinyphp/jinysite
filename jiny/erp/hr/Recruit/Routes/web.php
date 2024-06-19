<?php
## 인력pool
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/hr/user')->name('hr.user.')->group(function () {



    });
});

// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/hr/admin')->name('admin.hr.')->group(function () {

        // 데시보드
        Route::get('/recruit', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitDashboard::class,
            "index"
        ]);

        ## 채용기획
        Route::get('/recruit/plan', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitPlan::class,
            "index"
        ]);

        Route::get('/recruit/process', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitProcess::class,
            "index"
        ]);

        ## 채용 형태
        Route::get('/recruit/type', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitType::class,
            "index"
        ]);

        ## 입사지원자 목록
        Route::get('/recruit/register', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitRegister::class,
            "index"
        ]);

        ## 입사Pool 목록
        Route::get('/recruit/pool', [
            \Jiny\Erp\Hr\Recruit\Http\Controllers\Admin\RecruitPool::class,
            "index"
        ]);

    });
});
