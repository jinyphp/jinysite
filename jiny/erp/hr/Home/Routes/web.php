<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

## 소개 페이지
Route::middleware(['web'])
->name('hr')
->prefix("/hr")->group(function () {
    Route::get('/', function(){
        return view("jinyerp-hr-home::home.index");
    });
});


$prefix_hr_user = "/hr/user";

// HR 사원 마이페이지
Route::middleware(['web', 'auth', 'verified'])
->name("hr.user")
->prefix($prefix_hr_user)->group(function () {
    Route::get('/', [
        \Jiny\Erp\Hr\Home\Http\Controllers\User\HrHomeUserDashboard::class,
        "index"
    ]);
});


$prefix_hr_admin = "/hr/admin";
// HR 관리직원
Route::middleware(['web', 'auth', 'verified'])
->name("hr.admin")
->prefix($prefix_hr_admin)->group(function () {
    Route::get('/', [
        \Jiny\Erp\Hr\Home\Http\Controllers\Admin\HrAdminDashboard::class,
        "index"
    ]);

    ## 사업장
    Route::get('/business', [
        \Jiny\Erp\Base\Http\Controllers\Admin\BusinessController::class,
        "index"
    ]);

    // 내회사 자세히 보기
    Route::get('/business/detail/{id?}', [
        \Jiny\Erp\Hr\Home\Http\Controllers\Admin\MyBusinessDetail::class,
        "index"
    ]);
});
