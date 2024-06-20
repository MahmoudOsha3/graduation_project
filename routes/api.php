<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController ;
use App\Http\Controllers\Api\AuthController ;
use App\Http\Controllers\Api\RequestsAppointmentController ;
use App\Http\Middleware\ChangeLanguage;


Route::prefix('user')->group(function () {
    Route::post('login' , [AuthController::class , 'login'])->middleware('checkPasswordApi');
    Route::post('register' , [AuthController::class , 'register'])->middleware('checkPasswordApi');

});
Route::group([
    // 'middleware' => ['changeLang' , 'checkPasswordApi' , 'checkPatientToken:api'],
    'prefix' => 'user'
] , function () {

    Route::prefix('doctors')->group(function () {
        // get all doctors
        Route::get('/', [ApiController::class , 'getAllDoctors']);
        Route::get('/{id}', [ApiController::class , 'getDoctor']);
        Route::get('/search/{name}', [ApiController::class , 'searchDoctors']);
        Route::get('/search_Gov/{name}', [ApiController::class , 'searchDoctorWithinGovernment']);
        Route::get('search_Special/{name}' , [ApiController::class , 'searchDoctorsWithinSpecial']);
    });

    Route::prefix('governments')->group(function () {
        // get all governments
        Route::get('/' , [ApiController::class , 'getAllGovernments']);
        Route::get('/search/{name}' , [ApiController::class , 'searchGovernment']);
    });

    Route::prefix('specialization')->group(function () {
        // get all specialization
        Route::get('/' , [ApiController::class , 'getAllSpecialization']);
        Route::get('/search/{name}' , [ApiController::class , 'searchSpecialization']);
    });
    Route::get('/bookingAppointment/show/{patient_id}' , [RequestsAppointmentController::class , 'show']);
    Route::post('/bookingAppointment' , [RequestsAppointmentController::class , 'store']);
    Route::post('/bookingAppointment/update' , [RequestsAppointmentController::class , 'update']);
    Route::get('/bookingAppointment/delete/{id}' , [RequestsAppointmentController::class , 'destroy']);

    // logout => exit token and it work invalide token
    Route::post('logout' , [AuthController::class , 'logout']) ;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
