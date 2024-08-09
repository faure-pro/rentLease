<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EtatLieuxController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\TypeDeLocataireController;
use App\Http\Controllers\EcheancierController;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\ChargeMensuelController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);
Route::resource('proprietaires', ProprietaireController::class);
Route::resource('locataires', LocataireController::class);
Route::resource('appartements', AppartementController::class);
Route::resource('contrats', ContratController::class);
Route::resource('paiements', PaiementController::class);
Route::resource('batiments', BatimentController::class);
Route::resource('etat_lieux', EtatLieuxController::class);
Route::resource('chambres', ChambreController::class);
Route::resource('types_de_locataire', TypeDeLocataireController::class);
Route::resource('echeanciers', EcheancierController::class);
Route::resource('etages', EtageController::class);
Route::resource('charges_mensuelles', ChargeMensuelController::class);

Route::get('/', function () {
    return view('blank');
});