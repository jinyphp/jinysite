<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware(['web'])->group(function () {
//     Route::get('/about2', [
//         \App\Http\Controllers\SiteAboutPage::class,
//         "index"]);

// });

Route::post('/admin/site/images/delete-directory', [AdminSiteImages::class, 'deleteDirectory'])
    ->name('admin.site.images.deleteDirectory');



