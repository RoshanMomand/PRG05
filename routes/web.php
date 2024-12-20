<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;


Route::middleware(isAdmin::class)->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/all-blogs-overview', [AdminController::class, 'allBlogsIndex'])->name('admin.all.blogs.overview');
    Route::get('/all-genres-overview', [AdminController::class, 'allGenresIndex'])->name('admin.all.genres.overview');
    Route::get('/all-users-overview', [AdminController::class, 'allUserIndex'])->name('admin.all.users.overview');
    Route::get('/genre/create', [AdminController::class, 'createNewGenre'])->name('admin.create.genre');
    Route::post('/all-genres-overview', [AdminController::class, 'storeNewGenre'])->name('admin.store.new.genre');
    Route::get('/genre/{admin}', [AdminController::class, 'deleteGenre'])->name('admin.delete.genre');
    Route::post('/all-blogs-overview/{admin}', [AdminController::class, 'updateStatus'])->name('admin.update.status');

});
Route::resource('blogposts', BlogController::class);
Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/search', [BlogController::class, 'search'])->name('blogposts.search');
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
