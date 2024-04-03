<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AssistantController;
use App\Http\Models;
use App\Models\AspectsocioDemographique;
use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Hopital;


use Illuminate\Support\Facades\Route;
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
Route::get('/contact', function () {
    return view('contact.contact');
});Route::get('/propos', function () {
    return view('contact.propos');
});
Route::controller(MedecinController::class)->group(function () {
    Route::get('/dossier', [MedecinController::class, 'dossier'])->name('dossier.dossier');
    Route::patch('/dossier', [MedecinController::class, 'createDossier'])->name('dossier.createDossier');
    Route::get('/RendezVous', [MedecinController::class, 'RendezVous'])->name('RendezVous.RendezVous');
    Route::get('/dashboard', [MedecinController::class, 'dashboard'])->name('dashboard');
    Route::get('/ordonnance', [MedecinController::class, 'ordonnance'])->name('ordonnance.ordonnance');
    Route::post('/ordonnance', [MedecinController::class, 'store'])->name('ordonnance.store');
    Route::get('/patient', [MedecinController::class, 'patient'])->name('patient.patient');
});
Route::get('fullcalender', [MedecinController::class, 'index']);
Route::get('/events', [MedecinController::class, 'getEvents']);
Route::get('/schedule/delete/{id}', [MedecinController::class, 'deleteEvent']);
Route::post('/schedule/{id}', [MedecinController::class, 'update']);
Route::post('/schedule/{id}/resize', [MedecinController::class, 'resize']);
Route::get('/events/search', [MedecinController::class, 'search']);

Route::view('add-schedule', 'Medecin.add');
Route::post('create-schedule', [MedecinController::class, 'create']);

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
    Route::get('/gestiondoctor', [AdminController::class, 'doctor'])->name('admin.gestionDoctor');
    Route::post('/gestiondoctor', [AdminController::class, 'docteur'])->name('admin.docteur');
    Route::get('/hopital', [AdminController::class, 'hopital'])->name('hopital.hopital');
    Route::post('/hopital', [AdminController::class, 'store'])->name('hopital.store');
    Route::get('/adminDossier', [AdminController::class, 'adminDoss'])->name('admin.adminDoss');
    Route::get('/assist', [AdminController::class, 'assist'])->name('admin.assist');
    Route::post('/assist', [AdminController::class, 'assistant'])->name('admin.assistant');
    Route::get('/Rdv', [AdminController::class, 'Rdv'])->name('admin.Rdv');
}); 

Route::controller(AssistantController::class)->group(function () {
    Route::get('/assistant', [AssistantController::class, 'assistant'])->name('assistance.assistant');
}); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
