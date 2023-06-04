<?php

use Modules\K3\Http\Controllers\K3Controller;
use Modules\K3\Http\Controllers\FormController;
use Modules\K3\Http\Controllers\RkapController;
use Modules\K3\Http\Controllers\AuditController;
use Modules\K3\Http\Controllers\UploadController;
use Modules\K3\Http\Controllers\PenerapanController;
use Modules\K3\Http\Controllers\ReportingController;
use Modules\K3\Http\Controllers\AudittableController;
use Modules\K3\Http\Controllers\LeadershipController;
use Modules\K3\Http\Controllers\SafetitableController;
use Modules\K3\Http\Controllers\SafetyController;
use Modules\K3\Http\Controllers\ComunicationController;
use Modules\K3\Http\Controllers\LeadershipformController;
use Modules\K3\Http\Controllers\PenerapantableController;
use Modules\K3\Http\Controllers\ReportingtableController;
use Modules\K3\Http\Controllers\LeadershiptableController;
use Modules\K3\Http\Controllers\ComunicationtableController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('K3')->middleware('auth')->group(function() {
    Route::get('/', 'K3Controller@index'); 
    Route::post('/proses', 'FormController@store');
    Route::resource('/index', K3Controller::class);
    Route::resource('/rkap', RkapController::class);
    Route::resource('/form', FormController::class,);
    Route::resource('/leadership', LeadershipController::class,);
    Route::resource('/audit', AuditController::class,);
    Route::resource('/audittable', AudittableController::class,);
    Route::resource('/penerapan', PenerapanController::class,);
    Route::resource('/penerapantable', PenerapantableController::class,);
    Route::resource('/safeti', SafetyController::class,);
    Route::resource('/safetitable', SafetitableController::class,);
    Route::resource('/comunication', ComunicationController::class,);
    Route::resource('/comunicationtable', ComunicationtableController::class,);
    Route::resource('/reporting', ReportingController::class,);
    Route::resource('/reportingtable', ReportingtableController::class,);
});