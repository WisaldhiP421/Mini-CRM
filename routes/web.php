<?php

use App\Http\Controllers\LoginsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginsController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginsController::class, 'authenticate'])->name('actionlogin');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::post('/company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/update', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/company/{id}/delete', [CompanyController::class, 'delete'])->name('company.delete');
    Route::get('/getCompany/{id}', [CompanyController::class, 'getCompany'])->name('company.getCompany');

    Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai.index');
    Route::post('/pegawai/create', [EmployeeController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/update', [EmployeeController::class, 'update'])->name('pegawai.update');
    Route::get('/pegawai/{id}/delete', [EmployeeController::class, 'delete'])->name('pegawai.delete');
    Route::get('/getPegawai/{id}', [EmployeeController::class, 'getPegawai'])->name('pegawai.getPegawai');
    
    Route::get('actionlogout', [LoginsController::class, 'actionlogout'])->name('actionlogout');
});

Route::get('/sidebar', function(){
    return view('sidebar');
});
