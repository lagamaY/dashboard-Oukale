<?php

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
Route::get('/', [AccueilController::class, 'getAccueil' ]);
Route::get('/archive', [ArchiveController::class, 'getArchive' ])->name('getArchive');
Route::get('/oukale-en-temps-reel', [EnTempsReelController::class, 'getEnTempsReel' ])->name('getEnTempsReel');
Route::get('/vue-du-robot', [VueDuRobotController::class, 'getVueDuRobot' ])->name('getVueEnsemble');
Route::get('/etat-de-sante', [EtatDeSanteController::class, 'getEtatDeSante' ])->name('getEtatDeSante');
Route::get('/controle-à-distance', [ContrôleAdistanceController::class, 'getContrôleAdistance' ])->name('getContrôleAdistance');

// AUTH 
Route::get('/connexion', [ConnectionController::class, 'getConnexion' ])->name('connexion');
Route::get('/enregistrement', [EnregistrementController::class, 'getEnregistrement' ])->name('creer-un-compte');
Route::get('/mot-de-passe-oublie', [MotDePasseOublieController::class, 'getMotDePasseOublie' ])->name('mot-de-passe-oublie');
Route::get('/reinitialiser-mot-de-passe-oublie', [ReinitialerMotDePasseController::class, 'getReinitialerMotDePasseOublie' ])->name('reinitialiser-mot-de-passe-oublie');

