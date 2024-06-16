<?php

use App\Http\Controllers\ListingsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/mission-and-vision', function () {
    return view('mission-and-vision');
})->name('mission-and-vision');

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('listings', ListingsController::class);

    //2222 aun no estoy seguro que esto este ejecutandose pero no ha crasheado nada aun
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
        return view('dashboard2');
    })->name('dashboard2');

    Route::middleware(['auth:sanctum', 'verified'])->get('/page1', function () {
        return view('page1');
    })->name('page1');

    Route::middleware(['auth:sanctum', 'verified'])->get('/page2', function () {
        return view('page2');
    })->name('page2');


});
