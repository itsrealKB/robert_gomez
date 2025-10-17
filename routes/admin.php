<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('assignments')->controller(AssignmentController::class)->name('assign.')->group(function () {
    Route::get('/', 'index')->name('index');
    // Route::get('details/', 'dtails')->name('details');
    Route::post('store', 'store')->name('store');
    Route::post('assign-agent', 'assignAgent')->name('agent');
    Route::post('bulk-upload', 'upload')->name('upload');
    Route::get('task-assigned', 'task')->name('task');  // Single view
    Route::get('complete', 'completeAssign')->name('complete');  // Single view
    Route::get('map', 'assignmentsMap')->name('assignments.map');  // Single view
    Route::get('detail/{id}', 'detail')->name('detail');
    Route::get('files/{id}', 'files')->name('files');
    Route::post('file/{id}/update', 'updateFile')->name('update.file');

    Route::post('destroy', 'destroy')->name('files.destroy');

    Route::post('search', 'searchAssign')->name('search');

    Route::post('assignment-payment/store', 'paymentDetailStore')->name('payment.store');
    Route::get('assignment-payment/edit/{id}', 'assignmentPaymentEdit')->name('payment.edit');
    Route::post('assignment-payment/update/{id}', 'assignmentPaymentUpdate')->name('payment.update');
    Route::post('assignment-payment/destroy', 'assignmentPaymentDestroy')->name('payment.destroy');

    // Locations
    Route::get('location/{location}', 'getZipCode');
});

Route::prefix('users')->controller(UserController::class)->name('users.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');
    Route::post('update-status', 'updateStatus')->name('update.status');
});

Route::prefix('settings')->controller(SettingsController::class)->name('settings.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('client-forms', 'clientForms')->name('client.forms');


    Route::post('client-forms/store', 'storeClientForm')->name('client.forms.store');
    Route::get('client-forms/edit/{id}', 'editClientForms')->name('client.forms.edit');
    Route::post('client-forms/update/{id}', 'updateClientForms')->name('client.forms.update');
    Route::post('client-forms/destroy', 'destroyClientForm')->name('client.forms.destroy');


    // General Forms Routes (New)
    Route::get('general-forms', 'generalForms')->name('general.forms');
    Route::post('general-forms/store', 'storeGeneralForm')->name('general.forms.store');
    Route::get('general-forms/edit/{id}', 'editGeneralForms')->name('general.forms.edit');
    Route::post('general-forms/update/{id}', 'updateGeneralForms')->name('general.forms.update');
    Route::post('general-forms/destroy', 'destroyGeneralForm')->name('general.forms.destroy');


    Route::get('guidelines', 'guidelines')->name('guidelines');
    Route::post('guidelines-store', 'guidelinesStore')->name('guidelines.store');
});
