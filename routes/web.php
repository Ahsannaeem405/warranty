<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\MyProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserProductsController;
use App\Models\Setting;

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
   // dd(1);
    $data = Setting::find(1);
    $return = ["setting" => $data];
    return view('home', $return);
})->name('main');

Route::get('password/forgot', function (){
    return view('auth.forgot-password');
})->name('forgot-password');

Auth::routes();
Route::get("/logout-user", function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Social Login with google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'facebookSignin']);
// End social login




Route::group(['middleware' => 'auth','auth_admin'], function() {

    Route::get("admin/site-logo", [SettingController::class, "siteLogo"])->name("logo");
    Route::get("admin/site-header", [SettingController::class, "siteHeader"])->name("header");
    Route::get("admin/site-sections", [SettingController::class, "section2"])->name("section2");
    Route::get("admin/site-section3", [SettingController::class, "section3"])->name("section3");
    Route::get("admin/site-section4", [SettingController::class, "section4"])->name("section4");

    Route::post("admin/site-logo/update", [SettingController::class, "saveLogo"])->name("save.logo");
    Route::post("admin/site-header/update", [SettingController::class, "saveHeader"])->name("save.header");
    Route::post("admin/site-sections/update", [SettingController::class, "saveSection2"])->name("save.section2");
    Route::post("admin/site-section3/update", [SettingController::class, "saveSection3"])->name("save.section3");
    Route::post("admin/site-section4/update", [SettingController::class, "saveSection4"])->name("save.section4");

    Route::get("admin/footer", [SettingController::class, "index"])->name("view-footer-fields");
    Route::post('admin/footer/update', [SettingController::class, 'updateFooter'])->name('update-footer');

    Route::get("admin/profile", [UserController::class, 'adminProfile'])->name("admin.profile")->middleware('is_admin');
    Route::post("admin/profile/save", [UserController::class, 'saveProfile'])->name("save.profile")->middleware('is_admin');
    Route::post("admin/product/save", [ProductController::class, 'saveProduct'])->name("save.product")->middleware('is_admin');
    Route::post("admin/csv/save", [ProductController::class, 'saveCSV'])->name("save.csv")->middleware('is_admin');
    Route::get("admin/users/list", [UserController::class, 'usersList'])->name("users")->middleware('is_admin');
    Route::get("admin/users/delete", [UserController::class, 'deleteUser'])->name("deleteUser")->middleware('is_admin');
    Route::post("admin/profile/update", [UserController::class, 'updateProfile'])->name("update.profile")->middleware('is_admin');
    Route::get("admin/users/edit", [UserController::class, 'editUser'])->name("editUser")->middleware('is_admin');
    Route::get("admin/product/list", [ProductController::class, 'productList'])->name("productList")->middleware('is_admin');
    Route::get("admin/users/products", [UserProductsController::class, 'index'])->name("users-product")->middleware('is_admin');
    Route::get("admin/product/delete", [ProductController::class, 'deleteproduct'])->name("deleteproduct")->middleware('is_admin');
    Route::get("admin/user/password", [UserController::class, 'checkpassword'])->name("checkpassword")->middleware('is_admin');

});


// Route::get("admin/site-logo", [SettingController::class, "section4"])->name("section4");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');
});

Route::group( [ 'middleware' =>'auth', 'auth_user' ], function(){

        Route::post("/add-product", [MyProductController::class, "add_product"])->name("add-product");
        Route::get('warranty-check', [ProductController::class, "warrantyCheck"])->name("warranty-check")->withoutMiddleware(['auth']);
        Route::post("/warranty-found", [ProductController::class, "warrantyFind"])->name("check_warranty")->withoutMiddleware(['auth']);
        Route::get("/my-product", [MyProductController::class, "myproduct"])->name("myproduct");
        Route::get("/product-detail", [MyProductController::class, "productDetail"])->name("product_detail");
        Route::get("/user-profile", [UserController::class, "user_profile"])->name("user-profile");
        Route::post("/user-profile/update", [UserController::class, "update_profile"])->name("update-profile");
        Route::get("/user-profile/password", [UserController::class, "check_password"])->name("check_password");
        Route::post("/user-profile/image", [UserController::class, "update_image"])->name("update-image");
        Route::get("/product-remove", [MyProductController::class, "removeProduct"])->name("product-remove");

        Route::get("/subscripe", [SubscriptionController::class, "subscription"])->name("subscripe");
        Route::get("/subscribers", [SubscriptionController::class, "index"])->name("get-subscribers");
        Route::get("/del{id}", [SubscriptionController::class, "destroy"])->name("del-subscriber");

});


Route::get("/privacy-policy", function(){
    return view("policy");
});

Route::get("/terms", function(){
    return view("terms");
});

