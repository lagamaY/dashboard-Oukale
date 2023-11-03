<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\EnTempsReelController;
use App\Http\Controllers\VueDuRobotController;
use App\Http\Controllers\EtatDeSanteController;
use App\Http\Controllers\ContrôleAdistanceController;

use App\Http\Controllers\Auth\ConnectionController;
use App\Http\Controllers\Auth\EnregistrementController;
use App\Http\Controllers\Auth\MotDePasseOublieController;
use App\Http\Controllers\Auth\ReinitialerMotDePasseController;



/*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/
//  DASHBORD
Route::get('/', [AccueilController::class, 'getAccueil' ])->name('accueil')->middleware('isLoggedIn');
Route::get('/archive', [ArchiveController::class, 'getArchive' ])->name('getArchive')->middleware('isLoggedIn');
Route::get('/oukale-en-temps-reel', [EnTempsReelController::class, 'getEnTempsReel' ])->name('getEnTempsReel')->middleware('isLoggedIn');
Route::get('/vue-du-robot', [VueDuRobotController::class, 'getVueDuRobot' ])->name('getVueEnsemble')->middleware('isLoggedIn');
Route::get('/etat-de-sante', [EtatDeSanteController::class, 'getEtatDeSante' ])->name('getEtatDeSante')->middleware('isLoggedIn');
Route::get('/controle-à-distance', [ContrôleAdistanceController::class, 'getContrôleAdistance' ])->name('getContrôleAdistance')->middleware('isLoggedIn');

// AUTH
Route::get('/connexion', [ConnectionController::class, 'getConnexion' ])->name('connexion');
// Route::get('/connexion', [ConnectionController::class, 'getConnexion' ])->name('connexion')->middleware('AlreadyLoggedIn');
Route::get('/enregistrement', [EnregistrementController::class, 'getEnregistrement' ])->name('creer-un-compte');
// Route::get('/enregistrement', [EnregistrementController::class, 'getEnregistrement' ])->name('creer-un-compte')->middleware('AlreadyLoggedIn');
Route::get('/mot-de-passe-oublie', [MotDePasseOublieController::class, 'getMotDePasseOublie' ])->name('mot-de-passe-oublie');
Route::any('/reinitialiser-mot-de-passe-oublie', [ReinitialerMotDePasseController::class, 'getReinitialerMotDePasseOublie' ])->name('reinitialiser-mot-de-passe-oublie');

///
Route::post('/enregistrement-utilisateur', [EnregistrementController::class, 'getEnregistrementUser' ])->name('enregistrement-utilisateur');
Route::post('/connexion-utilisateur', [ConnectionController::class, 'getConnexionUser' ])->name('connexion-utilisateur');
Route::any('/deconnexion-utilisateur', [ConnectionController::class, 'getDeconnexionUser' ])->name('deconnexion-utilisateur');
Route::post('/mot-de-passe-oublie', [MotDePasseOublieController::class, 'MotDePasseOublie' ])->name('reset-mot-de-passe-oublie');
Route::post('/reinitialiser-mot-de-passe-oublie', [ReinitialerMotDePasseController::class, 'ReinitialiserMotDePasse' ])->name('reinitialiser-mot-de-passe');
