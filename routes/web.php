<?php

use App\Http\Controllers\AcademicCollaborationController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmploymentPartnerController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




// front - End  


// Route::get('/', [FrontPageController::class, 'index']);
Route::get('/blog', [FrontPageController::class, 'blog']);
Route::get('/blogshow', [FrontPageController::class, 'blogshow'])->name('blogshow');




// Back - End
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/ag-lc-login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');


Route::group(['middleware' => 'auth'], function () {

    //Users
    Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('edituser');
    Route::post('user/{user}/update', [UserController::class, 'userupdate'])->name('userupdate');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/usermanagement', [UserController::class, 'showuserdata'])->name('usermanagement');
    Route::get('/adduser', [UserController::class, 'index'])->name('adduser');
    Route::post('/createaccount', [UserController::class, 'createaccount'])->name('createaccount');
    Route::get('userdetail/{id}', [UserController::class, 'userdetail'])->name('userdetail');
    Route::delete('user/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');


// Roles
    Route::get('/roles/index', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles/store', [RolesController::class, 'store'])->name('roles.store');
    Route::delete('roles/delete/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');
    Route::get('roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{role}/update', [RolesController::class, 'update'])->name('roles.update');
    Route::post('/roles/{role}/permissions', [RolesController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RolesController::class, 'revokePermission'])->name('roles.permissions.revoke');


//  Permissions
    Route::get('/permissions/index', [PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create', [PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/store', [PermissionsController::class, 'store'])->name('permissions.store');
    Route::delete('permissions/delete/{permission}', [PermissionsController::class, 'destroy'])->name('permissions.destroy');
    Route::get('permissions/{permission}/edit', [PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions/{permission}/update', [PermissionsController::class, 'update'])->name('permissions.update');

    Route:: post('/permissions/{permission}/roles', [PermissionsController::class, 'assignRole'])->name('permissions.roles');
    Route:: delete('/permissions/{permission}/roles/{role}', [PermissionsController::class, 'removeRole'])->name('permissions.roles.remove');


    /**
     * Course Routes
     * @yuvraj
     */
    Route::get('/courses/status', [CourseController::class, 'status'])->name('courses.status');
    Route::get('/sliders/status', [SliderController::class, 'status'])->name('sliders.status');
    Route::resources([
        'courses' => CourseController::class,
        'certificates' => CertificateController::class,
        'sliders' => SliderController::class
    ]);

//  Mentors
    Route::get('/mentors/index', [MentorController::class, 'index'])->name('mentors.index');
    Route::get('/mentors/create', [MentorController::class, 'create'])->name('mentors.create');
    Route::post('/mentors/store', [MentorController::class, 'store'])->name('mentors.store');
    Route::delete('mentors/delete/{mentor}', [MentorController::class, 'destroy'])->name('mentors.destroy');
    Route::get('mentors/{mentor}/edit', [MentorController::class, 'edit'])->name('mentors.edit');
    Route::post('/mentors/{mentor}/update', [MentorController::class, 'update'])->name('mentors.update');


//  Employment_Partners
    Route::get('/employment_partners/index', [EmploymentPartnerController::class, 'index'])->name('employment_partners.index');
    Route::get('/employment_partners/create', [EmploymentPartnerController::class, 'create'])->name('employment_partners.create');
    Route::post('/employment_partners/store', [EmploymentPartnerController::class, 'store'])->name('employment_partners.store');
    Route::delete('employment_partners/delete/{employment_partner}', [EmploymentPartnerController::class, 'destroy'])->name('employment_partners.destroy');
    Route::get('employment_partners/{employment_partner}/edit', [EmploymentPartnerController::class, 'edit'])->name('employment_partners.edit');
    Route::post('/employment_partners/{employment_partner}/update', [EmploymentPartnerController::class, 'update'])->name('employment_partners.update');

//Academic Collaboration

    Route::get('/academics/index', [AcademicCollaborationController::class, 'index'])->name('academics.index');
    Route::get('/academics/create', [AcademicCollaborationController::class, 'create'])->name('academics.create');
    Route::post('/academics/store', [AcademicCollaborationController::class, 'store'])->name('academics.store');
    Route::delete('academics/delete/{academic}', [AcademicCollaborationController::class, 'destroy'])->name('academics.destroy');
    Route::get('academics/{academic}/edit', [AcademicCollaborationController::class, 'edit'])->name('academics.edit');
    Route::post('/academics/{academic}/update', [AcademicCollaborationController::class, 'update'])->name('academics.update');

});

/**
 * Academic Collaboration & Placements
 * @Arpan
 */
Route::resources([

    'placements' => PlacementController::class,
]);
