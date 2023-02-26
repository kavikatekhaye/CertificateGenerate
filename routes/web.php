<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Models\Certificate;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/certificate/create',[CertificateController::class,'create'])->name('admin.certificate.create');
Route::get('admin/certificate/',[CertificateController::class,'index'])->name('admin.certificate');
Route::post('admin/certificate/store',[CertificateController::class,'store'])->name('admin.certificate.store');
Route::get('admin/certificate/pdf-download/{id}',[CertificateController::class,'pdfDownload'])->name('admin.certificate.pdf-download');
Route::get('admin/certificate/viewCertificate/{id}',[CertificateController::class,'view'])->name('admin.certificate.viewCertificate');

Route::post('admin/certificate/update/{id}',[CertificateController::class,'update'])->name('admin.certificate.update');
Route::get('admin/certificate/destroy/{id}',[CertificateController::class,'destroy'])->name('admin.certificate.destroy');

