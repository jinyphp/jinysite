<?php

//HR
Route::middleware(['web','auth', 'verified'])
->name('hr.')
->prefix('/hr/admin')->group(function () {

    # 질문답변
    Route::resource('/faq', \Jiny\Hr\Http\Controllers\Admin\FaqController::class);
    Route::resource('/qna', \Jiny\Hr\Http\Controllers\Admin\QnaController::class);

});
