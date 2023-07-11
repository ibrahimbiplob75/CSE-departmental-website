<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminUserController;

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

//Route::get('/', function () {
//    if(auth()->user()->category=="student"){
//        abort(401);
//    }
//    else {
//        return view('');
//    }
//})->middleware(['auth', 'verified']);

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard')->middleware(['auth','access','verified']);

Route::middleware('auth')->group(function () {

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth','access','verified']);
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth','access','verified']);
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth','access','verified']);


})->middleware(['auth','access','verified']);



//Email verify route
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::get('/teacher/register',[RegisteredUserController::class,'teacher_register']);
Route::get('/home/register',[RegisteredUserController::class,'student_register'])->name('register_student');



//Admin user control

Route::get('/admin/user',[adminUserController::class,'index'])->middleware(['auth','access','verified']);
Route::get('/admin/teacher',[adminUserController::class,'teacher'])->middleware(['auth','access','verified']);
Route::get('/admin/user/delete/{user_id}',[adminUserController::class,'admin_delete'])->middleware(['auth','access','verified']);
Route::get('/admin/user/block/{user_id}',[adminUserController::class,'admin_block'])->middleware(['auth','access','verified']);
Route::get('/admin/user/unblock/{user_id}',[adminUserController::class,'admin_unblock'])->middleware(['auth','access','verified']);


//Role position
Route::get('/role/permissions',[RoleController::class,'role_permissions'])->middleware(['auth','access','verified']);
Route::post('/role/permission',[RoleController::class,'role_permission'])->middleware(['auth','access','verified']);

Route::get('/user/role',[RoleController::class,'user_role'])->middleware(['auth','access','verified']);
Route::post('/role/assign',[RoleController::class,'role_assign'])->middleware(['auth','access','verified']);

Route::post('/use/role/assign',[RoleController::class,'user_role_assign'])->middleware(['auth','access','verified']);
Route::get('/role/edit/{role_id}',[RoleController::class,'role_edit'])->middleware(['auth','access','verified']);
Route::post('/use/role/update',[RoleController::class,'role_update'])->middleware(['auth','access','verified']);


Route::get('upload-image', [ ImageUploadController::class, 'index' ])->name('profile.image')->middleware(['auth','access','verified']);
Route::post('upload-image', [ ImageUploadController::class, 'store' ])->name('image.store')->middleware(['auth','access','verified']);





// F R O N T E N D S T A  R T

Route::get('/',[frontendController::class,'view']);
Route::get('/home',[frontendController::class,'index'])->name('home')->middleware('verified');
Route::get('/home/contact',[frontendController::class,'contact'])->name('contact_us');
Route::get('/home/about',[frontendController::class,'about'])->name('about_us');
Route::get('/home/my_profile',[frontendController::class,'my_profile'])->name('my_profile');


require __DIR__.'/auth.php';
