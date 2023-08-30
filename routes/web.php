<?php
namespace App\Http\Controllers;

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


# ROUTE LISTE DES ETUDIANTS
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);

#ROUTE AJOUTER DES ETUDIANTS
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

#ROUTE MODIFIER DES ETUDIANTS
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);

#ROUTE SUPPRIMER DES ETUDIANTS
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
