<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\BrokerPermissionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CybersecurityController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GrcController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\KSAController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPermissionController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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


// //////////////////////Language Route //////////////////////////////
// Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('switch.language');


Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login',[AuthController::class, 'showLogin'])->name('auth.login-show');
    Route::post('login',[AuthController::class, 'login'])->name('auth.login');

});
// Route::get('admin', function () {
//     return view('cms.categories.create');
// });
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::view('/','cms.parent');
    Route::resource('admins', AdminController::class);
    Route::resource('users',UserController::class);

    Route::resource('certificates',CertificateController::class);
    Route::resource('internationals',InternationalController::class);
    Route::resource('cybers',CybersecurityController::class);
    Route::resource('Grces',GrcController::class);
    Route::resource('ksas',KSAController::class);
});

Route::get('/',[FrontController::class, 'index']);
Route::fallback(function () {
    //


});

