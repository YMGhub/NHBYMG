<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationRentalController;
use App\Http\Controllers\CareerController;
//use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', [AboutUsController::class, 'aboutus_info'])->name('about-us');


Route::get('/mission-and-vision', [AboutUsController::class, 'mission_vision_info'])->name('mission-and-vision');

Route::get('/our-executives', function () {
    return view('our-executives');
})->name('our-executives');

Route::get('/our-executives', function () {
    return view('our-executives');
})->name('our-executives');

Route::get('/our-department', function () {
    return view('our-department');
})->name('our-department');

Route::get('/commercial-endeavors', function () {
    return view('commercial-endeavors');
})->name('commercial-endeavors');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::post('/careers/apply', [CareerController::class, 'submitApplication'])->name('careers.apply');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/apply', [ContactController::class, 'submitApplication'])->name('contact.apply');

//application for rental Form
Route::get('/application-for-rental', function () {
    return view('application-for-rental');
})->name('application-for-rental');

Route::post('/application-for-rental/apply', [ApplicationRentalController::class, 'submitApplication'])->name('application-for-rental.apply');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'restrictRole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');



    //About Us
    Route::prefix('/admin/about-us')->group(function () {

        Route::get('/', [AboutUsController::class, 'index'])->name('admin.aboutus.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [AboutUsController::class, 'create'])->name('admin.aboutus.create');

        // Edit
        Route::get('/edit/{id}', [AboutUsController::class, 'edit'])->name('admin.aboutus.edit');

        ///Update
        Route::put('/update-about-us/{id}', [AboutUsController::class, 'update'])->name('admin.aboutus.update');
    });
});




//Rutas forms
Route::middleware(['auth:sanctum', 'restrictRole:user,admin'])->group(function () {
    Route::get('/list-form', [ListFormController::class, 'index'])->name('listform.index');
});
