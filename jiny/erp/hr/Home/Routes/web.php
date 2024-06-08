<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

$prefix_hr_user = "/hr/user";
$prefix_hr_admin = "/admin/hr";

// HR 사용자
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix("/hr/user")->name('hr.user')->group(function () {
        Route::get('/', [
            \Jiny\Erp\Hr\Home\Http\Controllers\User\HrHomeUserDashboard::class,
            "index"
        ]);


    });
});


// HR 관리자
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix("/admin/hr")->name('admin.hr.')->group(function () {

        // Admin 데쉬보드
        Route::get('/', [
            \Jiny\Erp\Hr\Home\Http\Controllers\Admin\DashboardController::class,
            "index"
        ]);

    });
});
