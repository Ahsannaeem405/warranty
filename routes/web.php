<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\MyProductController;

// use Database\Factories\ProductFactory;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get("/logout-user", function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Social Login with google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'facebookSignin']);
// End social login

Route::get("admin/profile", [UserController::class, 'adminProfile'])->name("admin.profile")->middleware('is_admin');
Route::post("admin/profile/save", [UserController::class, 'saveProfile'])->name("save.profile")->middleware('is_admin');
Route::post("admin/product/save", [ProductController::class, 'saveProduct'])->name("save.product")->middleware('is_admin');
Route::post("admin/csv/save", [ProductController::class, 'saveCSV'])->name("save.csv")->middleware('is_admin');
Route::get("admin/users/list", [UserController::class, 'usersList'])->name("users")->middleware('is_admin');
Route::get("admin/users/delete", [UserController::class, 'deleteUser'])->name("deleteUser")->middleware('is_admin');
Route::post("admin/profile/update", [UserController::class, 'updateProfile'])->name("update.profile")->middleware('is_admin');
Route::get("admin/users/edit", [UserController::class, 'editUser'])->name("editUser")->middleware('is_admin');
Route::get("admin/product/list", [ProductController::class, 'productList'])->name("productList")->middleware('is_admin');
Route::get("admin/product/delete", [ProductController::class, 'deleteproduct'])->name("deleteproduct")->middleware('is_admin');
Route::get("admin/user/password", [UserController::class, 'checkpassword'])->name("checkpassword")->middleware('is_admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');
});

Route::get("/add-product", [MyProductController::class, "add_product"])->name("add-product");
Route::get('warranty-check', [ProductController::class, "warrantyCheck"])->name("warranty-check");
Route::post("/warranty-found", [ProductController::class, "warrantyFind"])->name("check_warranty");
Route::get("/my-product", [MyProductController::class, "myproduct"])->name("myproduct");
Route::get("/product-detail", [MyProductController::class, "productDetail"])->name("product_detail");