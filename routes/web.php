<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\batchController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\enrollmentController;



Route::resource("payment",paymentController::class);
Route::resource("enrollment",enrollmentController::class);
Route::resource("batch",batchController::class);
Route::resource("course",coursesController::class);
Route::resource("student",studentController::class);
Route::resource("teacher",teacherController::class);

Route::get("report/{pid}",[ReportController::class,"report"])->name("report");



Route::get('/', function () {
    return view("layout");
});

Route::get('/', function () {
    return view('layout');
});
