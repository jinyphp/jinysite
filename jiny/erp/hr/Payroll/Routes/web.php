<?php
## 급여(payroll)
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
    Route::prefix('/hr/admin')->name('admin.hr.')->group(function () {

        // 최저시급
        Route::get('/payroll/wage', [
            \Jiny\Erp\Hr\Payroll\Http\Controllers\Admin\PayrollWage::class,
            "index"
        ]);

        // 급여테이블
        Route::get('/payroll/salary', [
            \Jiny\Erp\Hr\Payroll\Http\Controllers\Admin\PayrollSalary::class,
            "index"
        ]);

    });
});
