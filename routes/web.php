<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController as FrontPostController;
use App\Http\Controllers\CategoryController as FrontCategoryController;
use App\Http\Controllers\PageController as FrontPageController;
use App\Http\Controllers\PortfolioMainController;
use App\Http\Controllers\TagController as FrontTagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FrontEnd Routes [Public routes]
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::get('/about', function() {
    return view('about');
})->name('about');
Route::get('/service', function() {
    return view('service');
})->name('service');
Route::get('/service/listing-copywriting', function() {
    return view('service-detail-1');
})->name('service-detail-1');
Route::get('/service/product-photography-and-video', function() {
    return view('service-detail-2');
})->name('service-detail-2');
Route::get('/service/a-content-optimizing', function() {
    return view('service-detail-3');
})->name('service-detail-3');
Route::get('/service/others-service', function() {
    return view('service-detail-4');
})->name('service-detail-4');

Route::get('/term', function() {
    return view('term');
})->name('term');
Route::get('/policy', function() {
    return view('policy');
})->name('policy');

Route::get('project', [PortfolioMainController::class, 'index'])->name('project');
Route::get('/project/{slug}', [PortfolioMainController::class, 'getPortfolioBySlug'])->name('project.show');
Route::post('form-contact', [HomeController::class, 'formContact'])->name('form.contact');
Route::get('/', [HomeController::class, 'index'])->name('webhome');
Route::get('/post', [FrontPostController::class, 'index'])->name('post.index');
Route::get('/post/{slug}', [FrontPostController::class, 'getPostBySlug'])->name('post.show');
Route::get('/category/{slug}', [FrontCategoryController::class, 'getCategoryBySlug'])->name('category.show');
Route::get('/page/{slug}', [FrontPageController::class, 'getPageBySlug'])->name('page.show');
Route::get('/tag/{slug}', [FrontTagController::class, 'getPostsPerTags'])->name('tag.show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'can:admin-login'])->name('admin.')->prefix('/admin')->group(function () {
    // This Roles can manage with Admin & Writers with specific policies.
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/post/search', [PostController::class,'search'])->name('post.search');
    Route::get('/post/slug-get', [PostController::class, 'getSlug'])->name('post.getslug');
    Route::resource('/post', PostController::class);

    Route::get('/portfolio/search', [PortfolioController::class,'search'])->name('portfolio.search');
    Route::get('/portfolio/slug-get', [PortfolioController::class, 'getSlug'])->name('portfolio.getslug');
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/review', ReviewController::class);

    Route::resource('/tag', TagController::class);
    Route::resource('/account', AccountController::class, ['only' => ['index', 'update']]);
    // Special To Admin Role Only
    Route::middleware(['can:admin-only'])->group(function () {
        Route::get('/category/slug-get', [CategoryController::class, 'getSlug'])->name('category.getslug');
        Route::resource('/category', CategoryController::class);
        Route::get('/page/slug-get', [PageController::class, 'getSlug'])->name('page.getslug');
        Route::resource('/user', UserController::class, ['except' => ['create', 'store', 'show']]);
        Route::resource('/page', PageController::class);
        Route::resource('/role', RoleController::class, ['only' => ['index']]);
        Route::resource('/setting', SettingController::class, ['only' => ['index', 'update']]);
    });
});

require __DIR__ . '/auth.php';
