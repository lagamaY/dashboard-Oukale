<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', [AccueilController::class, 'getAccueil' ]);

