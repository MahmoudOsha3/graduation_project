<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Auth\DocAuthController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Doctor\AppointmentsController;


// email => ahmed@gmail.com
// email => mahmoud@gmail.com
// password => 123456789

Route::prefix('doctor')->group(function () {
    Route::get('login' , [DocAuthController::class , 'login'])->name('doctor.login');
    Route::post('login' , [DocAuthController::class , 'Checklogin'])->name('doctor.login');

    Route::get('register' , [DocAuthController::class , 'register'])->name('doctor.register');
    Route::post('register' , [DocAuthController::class , 'CheckeRgister'])->name('doctor.register');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:doctor' ]
    ],
    function()
    {
        Route::prefix('doctor')->group(function () {
            Route::get('dashboard' , [DoctorController::class , 'index'])->name('doctor.dashboard') ;
            Route::get('requests' , [DoctorController::class , 'RequestsBooking'])->name('doctor.requests') ;
            Route::get('patient' , [DoctorController::class , 'MyPatient'])->name('doctor.Mypatient') ;
            Route::get('profile' , [DoctorController::class , 'profile'])->name('doctor.profile');
            Route::put('profile/update/{id}' , [DoctorController::class , 'update'])->name('doctor.profile.update');
            Route::resource('appointments', AppointmentsController::class);
            Route::get('appointement' , [DoctorController::class , 'MyAppointements'])->name('doctor.Myappointment') ;
            Route::get('clinic' , [DoctorController::class , 'clinic'])->name('doctor.clinic') ;
            Route::post('clinic' , [DoctorController::class , 'storeClinic'])->name('doctor.clinic.store') ;




        });
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
