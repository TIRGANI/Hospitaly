<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:patient', 'prefix' => 'patient', 'as' => 'patient.'], function() {
        Route::resource('espacepatient', \App\Http\Controllers\Patients\EspacePatientController::class);
        Route::resource('gestionrdv', \App\Http\Controllers\Patients\gestionrdvController::class);
        Route::resource('viewmedecin', \App\Http\Controllers\Patients\viewmedecinController::class);
        Route::resource('showcalendar', \App\Http\Controllers\Patients\aiderdvpatientController::class);
        Route::resource('modifierrdv',\App\Http\Controllers\Patients\modifierrdvController::class);
        Route::resource('gestcal',\App\Http\Controllers\Patients\gestcalController::class);
        Route::resource('routurnjnd',\App\Http\Controllers\Patients\retournjndController::class);
        Route::resource('controllerdaterdv',\App\Http\Controllers\Patients\controllerdaterdv::class);
    });
    Route::group(['middleware' => 'role:medecin', 'prefix' => 'medecin', 'as' => 'medecin.'], function() {
        Route::resource('espacemedecin', \App\Http\Controllers\Medecins\EspaceMedecinController::class);
        Route::resource('calender', \App\Http\Controllers\Medecins\FullCalenderController::class);
        Route::resource('Events', \App\Http\Controllers\Medecins\EventsController::class);
        Route::resource('personaliser', \App\Http\Controllers\Medecins\journondispoController::class);
        Route::resource('addassistant',\App\Http\Controllers\Medecins\GestiondesassistenteController::class);
        Route::resource('modifierrole',\App\Http\Controllers\Medecins\modifierroleassistantsController::class);
        Route::resource('recherch',\App\Http\Controllers\Medecins\recherchedossierController::class);
        Route::resource('gestcal',\App\Http\Controllers\Medecins\gestioncalController::class);
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('espaceadmin', \App\Http\Controllers\Admins\EspaceAdminController::class);
    });
    Route::group(['middleware' => 'role:assistant', 'prefix' => 'assistant', 'as' => 'assistant.'], function() {
        Route::resource('roleassistant', App\Http\Controllers\Assistant\AssistantController::class);
    });

});
