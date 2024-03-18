<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Helper\Helper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["prefix" => "user", "controller" => DashboardController::class], function () {
    Route::get("/", "index")->name("dashboard");
    Route::get("/dashboard", "index")->name("dashboard");
    Route::get("/settings/change_password", "change_password")->name("user_change_password");
    Route::get("/settings/change_pin", "change_pin")->name("user_change_pin");
    Route::get("/settings/change_picture", "change_picture")->name("user_change_picture");
    Route::get("/onboard", "onboard")->name("onboard");
    Route::post("/onboard", "onboardAction");
    Route::post("/update_account", 'updateUserInformation')->name("update_account");
    Route::post('/password_update_account', 'ChangePassword')->name('password_update_account');
    Route::post('/update_profile_picture', 'uploadProfile')->name("update_picture");
    // search
    Route::get('/get-data/{username}', 'getAllReferrals')->name('get-data');
  
});

Route::group(["prefix" => "admin", "controller" => AdminController::class], function () {

    Route::get("/users/{status?}", "users")->name("admin_users");
    //View User Settings
    Route::get("/view_user/{userName}", "view_user")->name("admin_view_user");
    Route::post("/update_user/{userName}", "updateUser")->name("admin_update_user");
    Route::get("/change_password/{userName}", "change_password")->name("admin_change_password");
    Route::post("/update_password/{userName}", "updatePassword")->name("admin_update_password");
    Route::redirect('/', '/admin/users');
});

Route::group(["prefix" => "auth", "controller" => AuthController::class], function () {
    Route::get("/login", "login")->name("login");
    Route::post("/login", "");
    Route::get("/register", "register")->name("register");
    Route::post("/register", "registerNewUser");
    Route::post("/validate_referral", "validate_referral");
    Route::get("/logout", "logout")->name("logout");

    Route::get("/password/forgot" , 'showForgetForm')->name("forgot.password");
    Route::get('/password/reset', 'showResetForm')->name('password.request');
    Route::post('/password/email', 'sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'showResetForm')->name('password.reset');
    Route::post('/password/reset', 'reset')->name("password.update");

});

Route::group(["controller" => HomeController::class], function () {
    Route::get("/", "index")->name("scout");
});
