<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationForEmploymentWeeklyController;
use App\Http\Controllers\ApplicationRentalController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommercialEndeavorsController;
use App\Http\Controllers\CommercialEndeavorsInformationController;
//use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ListFormController;
use App\Http\Controllers\MonthlyWorkApplicationController;
use App\Http\Controllers\OurDepartmentsController;
use App\Http\Controllers\OurExecutivesController;
use App\Http\Controllers\OurProjectsController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\ApplicationForEmploymentWeekly;
use App\Models\Career;
use App\Models\CommercialEndeavors;
use App\Models\OurDepartments;
use App\Models\OurExecutives;
use App\Models\OurServices;
use Illuminate\Support\Facades\Route;

Route::get('/', [OurServiceController::class, 'ourservices_info2'])->name('welcome');

Route::get('/about-us', [AboutUsController::class, 'aboutus_info'])->name('about-us');


Route::get('/mission-and-vision', [AboutUsController::class, 'mission_vision_info'])->name('mission-and-vision');

Route::get('/our-executives', [OurExecutivesController::class, 'ourexecutives_info'])->name('our-executives');


Route::get('/our-department', [OurDepartmentsController::class, 'ourdepartment_info'])->name('our-department');

Route::get('/commercial-endeavors', [CommercialEndeavorsController::class, 'commercial_info'])->name('commercial-endeavors');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::post('/careers/apply', [CareerController::class, 'submitApplication'])->name('careers.apply');

Route::get('/faq', [FaqsController::class, 'faq_info'])->name('faq');

Route::get('/our-services', [OurServiceController::class, 'ourservices_info'])->name('our-services');

Route::get('/projects', [OurProjectsController::class, 'ourprojects_info'])->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/apply', [ContactController::class, 'submitApplication'])->name('contact.apply');

//application for rental Form
Route::get('/application-for-rental', function () {
    return view('application-for-rental');
})->name('application-for-rental');

Route::post('/application-for-rental/apply', [ApplicationRentalController::class, 'submitApplication'])->name('application-for-rental.apply');

//form application APPLICATION FOR EMPLOYMENT - Monthly
Route::get('/monthly-work-application', function () {
    return view('monthly-work-application');
})->name('monthly-work-application');

Route::post('/monthly-work-application/apply', [MonthlyWorkApplicationController::class, 'submitApplication'])->name('monthly-work-application.apply');

//Form Appplication APPLICATION FOR EMPLOYMENT (WEEKLY)
Route::get('/application-for-employment-weekly', function () {
    return view('application-for-employment-weekly');
})->name('application-for-employment-weekly');

Route::post('/application-for-employment-weekly/apply', [ApplicationForEmploymentWeeklyController::class, 'submitApplication'])->name('application-for-employment-weekly.apply');


//Form Application for the purchase
Route::get('/application-for-the-purchase', function () {
    return view('application-for-the-purchase');
})->name('application-for-the-purchase');

//Route::post('/application-for-employment-weekly/apply', [ApplicationForEmploymentWeeklyController::class, 'submitApplication'])->name('application-for-employment-weekly.apply');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum'])->group(function () {

    //About Us
    Route::prefix('/admin/about-us')->group(function () {

        Route::get('/', [AboutUsController::class, 'index'])->name('admin.aboutus.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [AboutUsController::class, 'create'])->name('admin.aboutus.create');

        // Edit
        Route::get('/edit/{id}', [AboutUsController::class, 'edit'])->name('admin.aboutus.edit');

        // store
        Route::post('/', [AboutUsController::class, 'storeAboutUs'])->name('admin.aboutus.store');

        ///Update
        Route::put('/update-about-us/{id}', [AboutUsController::class, 'update'])->name('admin.aboutus.update');
    });

    //Our Executive
    Route::prefix('/admin/our-executives')->group(function () {


        Route::get('/', [OurExecutivesController::class, 'index'])->name('admin.our-executives.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [OurExecutivesController::class, 'create'])->name('admin.our-executives.create');

        Route::post('/', [OurExecutivesController::class, 'store'])->name('admin.our-executives.store');

        // Edit
        Route::get('/edit/{id}', [OurExecutivesController::class, 'edit'])->name('admin.our-executives.edit');

        ///Update
        Route::put('/update-our-executives/{id}', [OurExecutivesController::class, 'update'])->name('admin.our-executives.update');

        ///delete
        Route::delete('/delete-our-executives/{id}/delete', [OurExecutivesController::class, 'destroy'])->name('admin.our-executives.destroy');
    });

    //Commercial Endeavors
    Route::prefix('/admin/commercial-endeavors')->group(function () {

        Route::get('/', [CommercialEndeavorsController::class, 'index'])->name('admin.commercial-endeavors.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [CommercialEndeavorsController::class, 'create'])->name('admin.commercial-endeavors.create');

        Route::post('/', [CommercialEndeavorsController::class, 'store'])->name('admin.commercial-endeavors.store');

        // Edit
        Route::get('/edit/{id}', [CommercialEndeavorsController::class, 'edit'])->name('admin.commercial.endeavors.edit');

        ///Update
        Route::put('/update-commercial/{id}', [CommercialEndeavorsController::class, 'update'])->name('admin.commercial.endeavors.update');

        ///delete
        Route::delete('/delete-commercial/{id}/delete', [CommercialEndeavorsController::class, 'destroy'])->name('admin.commercial.endeavors.destroy');
    });

    //Commercial Endeavors Information Page
    Route::prefix('/admin/commercial-endeavors/information')->group(function () {
        //page information
        Route::get('/', [CommercialEndeavorsInformationController::class, 'index'])->name('admin.commercial-endeavors.information.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [CommercialEndeavorsInformationController::class, 'create'])->name('admin.commercial-endeavors.information.create');

        Route::post('/', [CommercialEndeavorsInformationController::class, 'store'])->name('admin.commercial-endeavors.information.store');

        // Edit
        Route::get('/edit-info_page/{id}', [CommercialEndeavorsInformationController::class, 'edit'])->name('admin.commercial.endeavors.information.edit');

        ///Update
        Route::put('/update-commercial-info-page/{id}', [CommercialEndeavorsInformationController::class, 'update'])->name('admin.commercial.endeavors.information.update');

        ///delete
        Route::delete('/delete-commercial-info-page/{id}/delete', [CommercialEndeavorsInformationController::class, 'destroy'])->name('admin.commercial.endeavors.information.destroy');
    });

    //Career Admin
    Route::prefix('/admin/career')->group(function () {
        //page information
        Route::get('/', [CareerController::class, 'index'])->name('admin.career.index');
    });

    //FAQS
    Route::prefix('/admin/faqs')->group(function () {
        Route::get('/', [FaqsController::class, 'index'])->name('admin.faqs.index');
        Route::get('/create', [FaqsController::class, 'create'])->name('admin.faqs.create');
        Route::post('/', [FaqsController::class, 'store'])->name('admin.faqs.store');
        Route::get('/{faq}', [FaqsController::class, 'show'])->name('admin.faqs.show');
        Route::get('/{faq}/edit', [FaqsController::class, 'edit'])->name('admin.faqs.edit');
        Route::put('/{faq}', [FaqsController::class, 'update'])->name('admin.faqs.update');
        Route::delete('/{faq}', [FaqsController::class, 'destroy'])->name('admin.faqs.destroy');
    });

    //OurDeparment
    Route::prefix('/admin/our-department')->group(function () {
        Route::get('/', [OurDepartmentsController::class, 'index'])->name('admin.our-department.index');
        Route::get('/create', [OurDepartmentsController::class, 'create'])->name('admin.our-department.create');
        Route::post('/', [OurDepartmentsController::class, 'store'])->name('admin.our-department.store');

        Route::get('/edit/{id}', [OurDepartmentsController::class, 'edit'])->name('admin.our-department.edit');

        Route::put('/update/{id}', [OurDepartmentsController::class, 'update'])->name('admin.our-department.update');

        Route::delete('/{id}/delete', [OurDepartmentsController::class, 'destroy'])->name('admin.our-department.destroy');

        //delete photo in post
        Route::get('/edit/photo/{id}', [OurDepartmentsController::class, 'destroyPhoto'])->name('admin.our-department.deletephoto');
    });

    //OurProjects
    Route::prefix('/admin/our-projects')->group(function () {
        Route::get('/', [OurProjectsController::class, 'index'])->name('admin.our-projects.index');

        Route::get('/create', [OurProjectsController::class, 'create'])->name('admin.our-projects.create');

        Route::post('/', [OurProjectsController::class, 'store'])->name('admin.our-projects.store');

        Route::get('/edit/{id}', [OurProjectsController::class, 'edit'])->name('admin.our-projects.edit');

        Route::put('/update/{id}', [OurProjectsController::class, 'update'])->name('admin.our-projects.update');

        Route::delete('/{id}/delete', [OurProjectsController::class, 'destroy'])->name('admin.our-projects.destroy');
    });

    //OurProjects
    Route::prefix('/admin/our-services')->group(function () {
        Route::get('/', [OurServiceController::class, 'index'])->name('admin.our-services.index');

        Route::get('/create', [OurServiceController::class, 'create'])->name('admin.our-services.create');

        Route::post('/', [OurServiceController::class, 'store'])->name('admin.our-services.store');

        Route::get('/edit/{id}', [OurServiceController::class, 'edit'])->name('admin.our-services.edit');

        Route::put('/update/{id}', [OurServiceController::class, 'update'])->name('admin.our-services.update');

        Route::delete('/{id}/delete', [OurServiceController::class, 'destroy'])->name('admin.our-services.destroy');
    });


    //setttings website

    Route::prefix('/admin/settings')->group(function () {
        Route::get('/', [SiteSettingsController::class, 'index'])->name('admin.settings.index');
        //Route::get('/', [SiteSettingsController::class, 'create'])->name('admin.settings.create')

        Route::put('/update', [SiteSettingsController::class, 'update'])->name('admin.settings.update');
    });


    //NATIONAL HOUSING CORPORATION APPLICATION FOR EMPLOYMENT (WEEKLY) - ADMIN
    Route::prefix('/admin/application-for-employment-weekly')->group(function () {
        //page information
        Route::get('/', [ApplicationForEmploymentWeeklyController::class, 'index'])->name('admin.application-for-employment-weekly.index');

        // Edit
        Route::get('/edit/{id}', [ApplicationForEmploymentWeeklyController::class, 'edit'])->name('admin.application-for-employment-weekly.edit');

        ///Update
        Route::put('/update-form-submission/{id}', [ApplicationForEmploymentWeeklyController::class, 'update'])->name('admin.application-for-employment-weekly.update');
    });
});


//Manage users and Role
Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('/admin/roles', RoleController::class);
    Route::resource('/admin/users', UserController::class);

    Route::resource('/admin/properties', PropertyController::class);
    Route::resource('/admin/property-categories', PropertyCategoryController::class);
});



//Rutas forms
Route::middleware(['auth:sanctum', 'restrictRole:user,admin'])->group(function () {
    Route::get('/list-form', [ListFormController::class, 'index'])->name('listform.index');
});