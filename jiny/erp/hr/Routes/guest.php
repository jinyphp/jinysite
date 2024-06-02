<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


// 비인증 사용자 라우트
Route::middleware(['web', 'guest'])->group(function () {
    Route::prefix('/hr')->name('hr.')->group(function () {
        Route::get('/', function () {
            return view('jinyerp-hr::home.index');
        });
    });
});
