<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


function cUserEmployee()
{
    if($user = Auth::user()) {
        $email = $user->email;
        $row = DB::table('hr_employee')->where('email', $email)->first();
        return $row;
    }
}

// 인증 사용자 라우트
//
Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr/employee')->name('hr.')->group(function () {
        ## 부양가족
        Route::get('family', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\User\FamilyController::class,
            "index"
        ]);

        ## 학력
        Route::get('education', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\User\EducationController::class,
            "index"
        ]);

        ## 은행
        Route::get('bank', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\User\BankController::class,
            "index"
        ]);

        ## 자격증
        Route::get('license', [
            \Jiny\Hr\Http\Controllers\User\LicenseController::class,
            "index"
        ]);
    });
});

// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/admin/hr')->name('admin.hr.')->group(function () {

        Route::get('/employee', [
            \Jiny\Erp\Hr\mployee\Http\Controllers\Admin\EmployeeController::class,
            "index"
        ]);

        ## 사원-부양가족
        Route::get('family', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\Admin\FamilyController::class,
            "index"
        ]);

        ## 자격증
        Route::get('license', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\Admin\LicenseController::class,
            "index"
        ]);


        Route::get('/bank', [
            \Jiny\Erp\Hr\Employee\Http\Controllers\Admin\BankController::class,
            "index"
        ]);


    });
});

