<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/all-blogs', [BlogsController::class, 'index'])->name('all.blogs');
Route::get('/all-blogs/{id?}', [BlogsController::class, 'singleBlog'])->name('single.blog');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
