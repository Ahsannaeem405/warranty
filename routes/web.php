<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\ProductController;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


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
