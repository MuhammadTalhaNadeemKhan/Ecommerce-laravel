<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

// Auth::routes();

// Frontend Controllers
use App\Http\Controllers\frontend\IndexController as FrontendIndexController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\LoginController as FrontendLoginController;
use App\Http\Controllers\frontend\PolicyController;
use App\Http\Controllers\frontend\ReturnController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ShopSidebarRightController;
use App\Http\Controllers\frontend\TermsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;


// use App\Http\Controllers\frontend\AuthController;


// Backend Controllers
use App\Http\Controllers\backend\IndexController as BackendIndexController;
use App\Http\Controllers\backend\ProductlistController;
use App\Http\Controllers\backend\LoginController as BackendLoginController;
use App\Http\Controllers\backend\SignupController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\AddproductController;
use App\Http\Controllers\backend\AddattributesController;
use App\Http\Controllers\backend\AttributesController;
use App\Http\Controllers\backend\ResetpasswordController;
use App\Http\Controllers\backend\OrderlistController;
use App\Http\Controllers\backend\ProductdetailController;
use App\Http\Controllers\backend\AlluserController;
use App\Http\Controllers\backend\AddfaqController;
use App\Http\Controllers\backend\ListfaqController;
use App\Http\Controllers\backend\AdminBlogController;
use App\Http\Controllers\AdminProductController;



Route::get('/test-db', function () {
    $tables = DB::select('SHOW TABLES');
    dd($tables);  // This will dump all the tables in your database
});




// Frontend Routes
Route::get('/', [FrontendIndexController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq');
Route::get('/policy', [PolicyController::class, 'policy'])->name('policy');
Route::get('/terms', [TermsController::class, 'terms'])->name('terms');
Route::get('/return', [ReturnController::class, 'return'])->name('return');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/shop-sidebar-right', [ShopSidebarRightController::class, 'shopSidebarRight'])->name('ShopSidebarRight');
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('show-blog');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/login-register', [FrontendLoginController::class, 'showLoginRegisterForm'])->name('login-re'); // Show login/register form
Route::post('/login', [FrontendLoginControllerr::class, 'login'])->name('login'); // Handle login logic
Route::post('/register', [FrontendLoginController::class, 'register'])->name('register'); 
// Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Route::get('/login', function () {
//     return 'Welcome to your dashboard!';
// })->name('login');

// Backend Routes
Route::prefix('/admin')->as('admin.')->group(function () {
    Route::get('/', [BackendIndexController::class, 'index'])->name('home');
    Route::get('/orderlist', [OrderlistController::class, 'index'])->name('orderlist');
    Route::get('/add-product', [AddproductController::class, 'index'])->name('add-product');
    Route::get('/product-list', [ProductlistController::class, 'index'])->name('product-list');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/add-attributes', [AddattributesController::class, 'index'])->name('add-attributes');
    Route::get('/attributes', [AttributesController::class, 'index'])->name('attributes');
    Route::get('/product-detail', [ProductdetailController::class, 'index'])->name('product-detail');
    Route::get('/all-users', [AlluserController::class, 'index'])->name('all-user');
    Route::get('/list-faq', [ListfaqController::class, 'index'])->name('list-faq');
    Route::get('/add-faq', [AddfaqController::class, 'index'])->name('add-faq');
    Route::post('/add-faq', [AddfaqController::class, 'store'])->name('addfaq.store');



});

Route::prefix('/admin')->as('admin.')->group(function () {
    // Login Routes
    Route::get('/login', [BackendLoginController::class, 'index'])->name('login');
    Route::post('/login', [BackendLoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [BackendLoginController::class, 'logout'])->name('logout');

    // Signup Routes
    Route::get('/signup', [SignupController::class, 'index'])->name('sign-up');
    Route::post('/signup', [SignupController::class, 'register'])->name('sign-up.submit');

});

// Password Reset Routes
Route::get('password/reset', [ResetpasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetpasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetpasswordController::class, 'reset'])->name('password.update');





Route::prefix('admin/blog')->name('admin.blog.')->group(function () {
    Route::get('/', [AdminBlogController::class, 'index'])->name('index');  // List Blogs
    Route::get('create', [AdminBlogController::class, 'create'])->name('create');  // Add Blog
    Route::post('store', [AdminBlogController::class, 'store'])->name('store');  // Store Blog
    Route::get('edit/{blog}', [AdminBlogController::class, 'edit'])->name('edit');  // Edit Blog
    Route::put('update/{blog}', [AdminBlogController::class, 'update'])->name('update');  // Update Blog
    Route::delete('destroy/{blog}', [AdminBlogController::class, 'destroy'])->name('destroy');  // Delete Blog
});



Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/add-product', [AdminProductController::class, 'showAddForm'])->name('add-product');
    Route::post('/add-product', [AdminProductController::class, 'store'])->name('store-product');
    Route::get('/product-list', [AdminProductController::class, 'index'])->name('product-list');
    Route::get('/product-detail/{id}', [AdminProductController::class, 'showDetail'])->name('product-detail');
    Route::get('/edit-product/{id}', [AdminProductController::class, 'edit'])->name('edit-product');
    Route::put('/update-product/{id}', [AdminProductController::class, 'update'])->name('update-product');
    Route::delete('/delete-product/{id}', [AdminProductController::class, 'destroy'])->name('delete-product');
});




//under-construction Routes

Route::get('/category-list', function () {
    return "this is not implemented yet.";
}) -> name('admin.category-list');


Route::get('/wishlist', function () {
    return "this is not implemented yet.";
}) -> name('wishlist');


Route::get('/single-product', function () {
    return "this is not implemented yet.";
}) -> name('single-product');


Route::get('/new-category', function () {
    return "this is not implemented yet.";
}) -> name('admin.new-category');

Route::get('/oder-list', function () {
    return "this is not implemented yet.";
}) -> name('admin.oder-list');

Route::get('/oder-detail', function () {
    return "this is not implemented yet.";
}) -> name('admin.oder-detail');

Route::get('/oder-tracking', function () {
    return "this is not implemented yet.";
}) -> name('admin.oder-tracking');


Route::get('/product-details', function () {
    return "this is not implemented yet.";
}) -> name('product-details');

Route::get('/add-new-user', function () {
    return "this is not implemented yet.";
}) -> name('admin.add-new-user');

Route::get('/all-roles', function () {
    return "this is not implemented yet.";
}) -> name('admin.all-roles');

Route::get('/create-role', function () {
    return "this is not implemented yet.";
}) -> name('admin.create-role');

Route::get('/gallery', function () {
    return "this is not implemented yet.";
}) -> name('admin.gallery');

Route::get('/countries', function () {
    return "this is not implemented yet.";
}) -> name('admin.countries');

Route::get('/report', function () {
    return "this is not implemented yet.";
}) -> name('admin.report');

Route::get('/states', function () {
    return "this is not implemented yet.";
}) -> name('admin.states');

Route::get('/cities', function () {
    return "this is not implemented yet.";
}) -> name('admin.cities');

Route::get('/list-page', function () {
    return "this is not implemented yet.";
}) -> name('admin.list-page');

Route::get('/new-pages', function () {
    return "this is not implemented yet.";
}) -> name('admin.new-page');

Route::get('/edit-page', function () {
    return "this is not implemented yet.";
}) -> name('admin.edit-page');

Route::get('/components', function () {
    return "this is not implemented yet.";
}) -> name('admin.components');

