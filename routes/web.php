<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['web'])->group(function () {
    Route::get('/about2', [
        \App\Http\Controllers\SiteAboutPage::class,
        "index"]);
});
