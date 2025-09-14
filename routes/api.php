<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyProjectController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('company', CompanyController::class);
Route::apiResource('project', ProjectController::class);
Route::apiResource('profile', ProfileController::class);
Route::apiResource('employee', EmployeeController::class);
Route::apiResource('company-projects', CompanyProjectController::class);
