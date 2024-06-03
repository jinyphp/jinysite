<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::prefix('/jiny/hr')->name('hr.')->group(function () {
        ## 발급 (Credentials)
        Route::get('credentials', [
            \Jiny\Erp\Hr\Credentials\Http\Controllers\User\CredentialsController::class,
            "index"
        ]);

        ### 재직증명서
    });
});



