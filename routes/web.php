<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\EnTempsReelController;
use App\Http\Controllers\VueDuRobotController;
use App\Http\Controllers\EtatDeSanteController;
use App\Http\Controllers\ContrôleAdistanceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', [AccueilController::class, 'getAccueil' ]);
Route::get('/archive', [ArchiveController::class, 'getArchive' ])->name('getArchive');
Route::get('/oukale-en-temps-reel', [EnTempsReelController::class, 'getEnTempsReel' ])->name('getEnTempsReel');
Route::get('/vue-du-robot', [VueDuRobotController::class, 'getVueDuRobot' ])->name('getVueEnsemble');
Route::get('/etat-de-sante', [EtatDeSanteController::class, 'getEtatDeSante' ])->name('getEtatDeSante');
Route::get('/controle-à-distance', [ContrôleAdistanceController::class, 'getContrôleAdistance' ])->name('getContrôleAdistance');

