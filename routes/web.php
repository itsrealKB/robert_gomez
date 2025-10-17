<?php


use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\WebAuthController;
use App\Http\Controllers\Web\AccountingController;
use App\Http\Controllers\Web\AssignmentController;
use App\Http\Controllers\Web\DownloadController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\ResourcesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['prevent-back-history', 'CheckAgent'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('search-assignment/{query}', [HomeController::class, 'searchAssignment'])->name('search.assignment');

    Route::get('/Accounting', [AccountingController::class, 'index'])->name('accounting');

    Route::get('/Resources', [ResourcesController::class, 'index'])->name('resources');


    Route::prefix('user_profile')->controller(ProfileController::class)->name('profile.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
        Route::post('change-password', 'updatePsw')->name('update.psw');
        Route::post('update-profile', 'updatePfp')->name('update.pfp');
    });


    Route::get('/general-forms/{id}/download', [DownloadController::class, 'general_forms'])->name('general-forms.download')->withoutMiddleware(['auth', 'CheckAdmin', 'CheckAgent', 'prevent-back-history']);
    Route::get('/client-forms/{id}/download', [DownloadController::class, 'client_forms'])->name('client-forms.download')->withoutMiddleware(['auth', 'CheckAdmin', 'CheckAgent', 'prevent-back-history']);
    Route::get('/assign-docs/{id}/download', [DownloadController::class, 'assignment_docs'])->name('assignment-docs.download')->withoutMiddleware(['auth', 'CheckAdmin', 'CheckAgent', 'prevent-back-history']);
    Route::get('/download-all/docs/{id}', [DownloadController::class, 'all_assignment_docs'])->name('download.all.zip')->withoutMiddleware(['auth', 'CheckAdmin', 'CheckAgent', 'prevent-back-history']);

    Route::controller(AssignmentController::class)->group(function () {

        Route::get('accept-reject/{id}', 'isAccept_view')->name('reject');
        Route::post('accept-reject/{id}', 'isAccept')->name('accept.reject');
        Route::get('/ChangePhase/{id}', 'change_phase_view')->name('changephase');
        Route::post('assignment-status', 'updateStatus')->name('assign.status');
        Route::get('/Docs/{id}', 'docs_view')->name('docs');
        Route::get('/View/{id}', 'view')->name('view');
        Route::post('/assign-detail/post/{id}', 'assignDetail')->name('assign.detail');
        Route::post('assign/upload-docs/{id}', 'upload_docs')->name('upload.docs');
        Route::post('assign/update-docs/{id}', 'update_docs')->name('update.docs');
        Route::post('assign/payment-info/{id}', 'paymentInfo')->name('payment.info');

        Route::post('destroy', 'destroy')->name('docs.destroy');
    });


    Route::get('/ReOpen', function () {
        return view('screens.web.reOpen');
    })->name('reopen');


    Route::get('/CompleteAssignment', function () {
        return view('screens.web.completeAssignment');
    })->name('completAssign');



    Route::get('/EMSUpload', function () {
        return view('screens.web.emsUpload');
    })->name('emsUpload');

    Route::get('/RenameFiles', function () {
        return view('screens.web.renameFiles');
    })->name('renamefile');

    Route::get('/AppraisalReport', function () {
        return view('screens.web.appraisalReport');
    })->name('appraiseReport');

    Route::get('/TotalLossReport', function () {
        return view('screens.web.totalLossReport');
    })->name('lossReport');

    Route::get('/ACVworksheet', function () {
        return view('screens.web.ACVworksheet');
    })->name('acvWork');

    Route::get('/ConditionSummary', function () {
        return view('screens.web.conditionSummary');
    })->name('conditionsumm');

    Route::get('/VehicleSumary', function () {
        return view('screens.web.vehicalSummary');
    })->name('vehicalsumm');

    Route::get('/SalvageBids', function () {
        return view('screens.web.salvageBids');
    })->name('salvagebid');

    Route::get('/ClientProprtySummary', function () {
        return view('screens.web.clientPropertySummary');
    })->name('cpsummary');

    Route::get('/PropertyReport', function () {
        return view('screens.web.propertyReport');
    })->name('propertyreport');

    Route::get('/SuppPayRequest', function () {
        return view('screens.web.suppPayReqSummary');
    })->name('suppayreq');

    Route::get('/PropertySuppSummary', function () {
        return view('screens.web.propertySuppSummary');
    })->name('propsuppsummary');

    Route::get('/PhotosOnly', function () {
        return view('screens.web.photosOnly');
    })->name('photosOnly');

    Route::get('/TotalLoss', function () {
        return view('screens.web.clientTotalLoss');
    })->name('totLoss');

    Route::get('/ClientAppraisalReport', function () {
        return view('screens.web.clientAppraisalReport');
    })->name('clientappraisal');

    Route::get('/Message', function () {
        return view('screens.web.message');
    })->name('messagePg');

    Route::get('/ConditionReport', function () {
        return view('screens.web.conditionReport');
    })->name('conditionreport');


    Route::get('/cards/{id}', function ($id) {
        return view('screens.web.view', ['id' => $id]);
    });
    // end of inner Pages routes

});

Route::middleware('guest')->group(function () {

    Route::get('/login', [WebAuthController::class, 'login_view'])->name('login');
    Route::post('/login', [WebAuthController::class, 'login']);
    // Route::get('/register', [WebAuthController::class, 'register_view'])->name('register');
    // Route::post('/register', [WebAuthController::class, 'register']);



    Route::get('admin/login', [AdminAuthController::class, 'login_view'])->name('admin.login');

    Route::post('admin/login', [AdminAuthController::class, 'login']);
});


Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout')->middleware('auth');



Route::get('/forgetPassword', function () {
    return view('auth.web.forgetPassword');
})->name('forgetpassword');

Route::get('/resetPassword', function () {
    return view('auth.web.resetPassword');
})->name('resetpassword');

Route::get('/passwordupdate', function () {
    return view('auth.web.passwordUpdate');
})->name('passwordupdate');
