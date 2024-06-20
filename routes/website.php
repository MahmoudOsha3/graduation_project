<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\Auth\PatientAuthController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\ChatbotsController;
use App\Livewire\DoctorComments;
use App\Livewire\DoctorWithinDepartments;



Route::prefix('patient')->group(function () {
    // =================== Register =====================
    Route::get('register' ,[PatientAuthController::class , 'register'])->name('view.website.register');
    Route::post('register/store' ,[PatientAuthController::class , 'registerStore'])->name('register.patient');
    // =================== Login ==========================
    Route::get('login' ,[PatientAuthController::class , 'login'])->name('website.login');
    Route::post('login' ,[PatientAuthController::class , 'checkLogin'])->name('check.website.login');

    Route::get('logout' ,[PatientAuthController::class , 'logout'])->name('website.logout');

});


Route::group([
        // 'prefix' => LaravelLocalization::setLocale(),
        // 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:patient'],
        'middleware' => [ 'auth:patient']
],function () {
    // ================== Home page of website ===========================
    Route::get('home' , [HomeController::class , 'index'])->name('site.home');

    // ================= Page for dispaly all doctors ====================
    Route::get('doctors' , [HomeController::class , 'doctors'])->name('site.doctors');

    // ================= Page for dispaly all departments ====================
    Route::get('department' , [HomeController::class , 'department'])->name('site.department');
    // Route::get('department-doctors/{special_id}' , DoctorWithinDepartments::class)->name('department.doctor') ;

    // ====================== Profile doctors =====================================
    Route::get('doctor-profile/{id}', [HomeController::class, 'profile'])->name('site.doctor-profile');
    // Route::get('doctor/rateing/{id}/{rate}' , [HomeController::class, 'rateing'])->name('site.doctor-rateing');

    // livewire comments
    Route::get('comments' , DoctorComments::class)->name('doctors.comment');

    Route::post('request/appointment', [HomeController::class , 'appointment'])->name('request.appointment');

    // profile user
    Route::get('user/profile' , [HomeController::class , 'userProfile'])->name('user-profile');
    Route::put('profile/update/{id}' , [HomeController::class , 'updateProfile'])->name('user-profile-update');


    // model
    Route::get('chatbot' , [ChatbotsController::class , 'index'])->name('chatbot.index');
    Route::post('chatbot/store' , [ChatbotsController::class , 'store'])->name('chatbot.store');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
