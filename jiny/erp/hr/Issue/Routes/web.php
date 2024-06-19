<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//HR
Route::middleware(['web','auth', 'verified'])
->name('hr.')
->prefix('/jiny/hr')->group(function () {



});


// HR Admin
Route::middleware(['web','auth:sanctum', 'verified', 'admin', 'super'])->group(function () {
    Route::prefix('/hr/admin')->name('admin.hr.')->group(function () {

        # 질문답변
        Route::get('/faq', [
            \Jiny\Erp\Hr\Issue\Http\Controllers\AdminFaqController::class,
            "index"
        ]);

        Route::get('/qna', [
            \Jiny\Erp\Hr\Issue\Http\Controllers\AdminQnaController::class,
            "index"
        ]);


    });
});
