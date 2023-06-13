<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


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

//Creation de la route pour afficher les etudiants
Route::get('/etudiant', [EtudiantController::class, 'listeEtudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouterEtudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouterEtudiantTraitement']);

//Creation d'une route pour la modification des données
Route::get('/update/{id}', [EtudiantController::class, 'updateEtudiant']);
//Creation de la route pour effectuer des modifications lors du clic sur le bouton
Route::post('/update/traitement', [EtudiantController::class, 'modifierEtudiantTraitement']);

//Création d'une route pour la modification des données d'un etudiant
Route::get('/supprimer/{id}', [EtudiantController::class, 'delEtudiant']);



