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

