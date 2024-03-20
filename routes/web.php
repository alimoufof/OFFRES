<?php

use App\Http\Controllers\Admin\accueilPhoto;
use App\Http\Controllers\Admin\accueilPhotoController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\OffreController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\SecteurController;
use App\Http\Controllers\Admin\TypeOffreController;
use App\Http\Controllers\Admin\EntrepriseController;
use App\Http\Controllers\Admin\ModerateurController;
use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\AdminController as AdminController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    // Inscription
    Route::get('/register', 'index')->name('register.index');
    Route::post('/register', 'store')->name('register.store');
    // Connexion
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'singIn')->name('singIn');
    // Deconnexion
    Route::get('/logout', 'logout')->name('logout');
    // Profilea
    Route::get('profile', 'show')->name('profile.show');
    Route::get('profile/{admin}/edit', 'edit')->name('profile.edit');
    Route::put('profile/{admin}', 'update')->name('profile.update');
    // Modification de mot de passe
    Route::get('edit-password/{admin}/edit', 'edit_password')->name('editPassword.edit');
    Route::put('edit-password/{admin}', 'update_password')->name('editPassword.update');
    // Changement de la photo de profile
    Route::put('change-avatar/{admin}', 'changeAvatar')->name('change.avatar');

    Route::get('dashboard', 'index')->name('dashboard.home');


});


Route::prefix('admin')->group(function () {
    Route::resource('departement', DepartementController::class);
    Route::resource('domaine', DomaineController::class);
    Route::resource('moderateur', ModerateurController::class);
    Route::resource('typeoffre', TypeOffreController::class);
    Route::resource('entreprise', EntrepriseController::class);
    Route::resource('secteur', SecteurController::class);
    Route::resource('offre', OffreController::class);
});
