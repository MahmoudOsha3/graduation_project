<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminAuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SpecializationController;
use App\Http\Controllers\Dashboard\ClinicsController;
use App\Http\Controllers\Dashboard\GovernmentController;
use App\Http\Controllers\Dashboard\DoctorsController;
use App\Http\Controllers\Dashboard\PatientsController;
use App\Http\Controllers\Dashboard\RequestsController;


Route::get('/', function () {
    return view('welcome') ;
});

Route::get('testLogin', function () {
    return view('admin.admin.testLogin') ;
});

Route::prefix('admin')->group(function () {
    Route::get('login' , [AdminAuthController::class , 'login'])->name('admin.login') ;
    Route::post('login' , [AdminAuthController::class , 'Checklogin'])->name('admin.login') ;


});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ],
    function()
    {
        Route::prefix('admin')->group(function () {
            Route::get('dashboard' , [DashboardController::class , 'index'])->name('admin.dashboard') ;

            //===========================Specialization===========
            Route::resource('specialization', SpecializationController::class);

            //===========================Clinics===========
            Route::resource('clinics', ClinicsController::class);

            //===========================Government===========
            Route::resource('government', GovernmentController::class);

            //======================Appointment=================
            Route::resource('requests', RequestsController::class);

            //===========================Doctors===========
            Route::resource('doctors', DoctorsController::class);
            Route::post('doctors/verify', [DoctorsController::class , 'verify'])->name('doctors.verify');
            Route::post('doctors/block', [DoctorsController::class , 'block'])->name('doctors.block');

            // ==================Emails=====================
            // Route::get('doctors/verfiy/email/{id}' ,[DoctorsController::class ,'verify']);

            //===========================Patients===========
            Route::resource('patients', PatientsController::class);

            Route::get('test' , function (){
                return view('admin.admin.testLogin') ;
            });
        });



    });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
