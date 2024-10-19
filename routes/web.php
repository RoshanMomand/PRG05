<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::resource('blogposts', BlogController::class);
Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/{deleteBlog}', [ProfileController::class, 'deleteBlog'])->name('profile.blog.delete');
});

require __DIR__ . '/auth.php';
