<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

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

//Actualité
Route::get('/actualite', [App\Http\Controllers\Controllers::class, 'actu1'])->name('actu1');
Route::get('/detail-de-l\'actualite/{id}', [App\Http\Controllers\Controllers::class, 'actu2'])->name('actu2');

// Route::get('/actualite/2023', [App\Http\Controllers\Controllers::class, 'actu4'])->name('actu4');

//Fondation
Route::get('/', [App\Http\Controllers\Controllers::class, 'index'])->name('Accueil');
Route::get('/projets', [App\Http\Controllers\Controllers::class, 'projet'])->name('projet');
Route::get('/detail/{id}', [App\Http\Controllers\Controllers::class, 'detail'])->name('detail');
Route::get('/projets/{projet}', [App\Http\Controllers\Dashboard::class, 'afficherModification'])->name('afficherModification'); 
Route::put('/projets/{id}', [App\Http\Controllers\Dashboard::class, 'modifier'])->name('modifier'); 
Route::get('/apropos', [App\Http\Controllers\Controllers::class, 'apropos'])->name('apropos');
Route::get('/realisation', [App\Http\Controllers\Controllers::class, 'realisation'])->name('realisation');
Route::get('/offres-d\'emplois', [App\Http\Controllers\Controllers::class, 'emplois'])->name('emplois');
Route::get('/detail-de-l\'offre-d\'emploi/{id}', [App\Http\Controllers\Controllers::class, 'demplois'])->name('demplois');
Route::get('/benevolats', [App\Http\Controllers\Controllers::class, 'benevol'])->name('benevol');
Route::get('/detail-sur-le-benevolat/{id}', [App\Http\Controllers\Controllers::class, 'dbenevol'])->name('dbenevol');
Route::get('/offres-de-stages', [App\Http\Controllers\Controllers::class, 'stage'])->name('stage');
Route::get('/detail-sur-l\'offre-de-stage/{id}', [App\Http\Controllers\Controllers::class, 'dstage'])->name('dstage');
Route::get('/nous-rejoindre', [App\Http\Controllers\Controllers::class, 'travail'])->name('travail');

//Membres
Route::get('/membre/partenaire', [App\Http\Controllers\Controllers::class, 'membpa'])->name('membpa');
Route::get('/membre/adhesion', [App\Http\Controllers\Controllers::class, 'membre'])->name('membre');
Route::post('/membre/adhesion', [App\Http\Controllers\Controllers::class, 'addmembre'])->name('addmembre');

//Programme
Route::get('/programme/assistance-troisieme-age', [App\Http\Controllers\Controllers::class, 'progas1'])->name('progas1');
Route::get('/programme/assistance-aux-orphelins', [App\Http\Controllers\Controllers::class, 'progas2'])->name('progas2');
Route::get('/programme/coaching-couple', [App\Http\Controllers\Controllers::class, 'progco'])->name('progco');
Route::get('/programme/education-jeunesse', [App\Http\Controllers\Controllers::class, 'proged'])->name('proged');

//FAQ
Route::get('/Faq', [App\Http\Controllers\Controllers::class, 'faq'])->name('faq');

//Don
Route::get('/don/pour-projet', [App\Http\Controllers\Controllers::class, 'donpr'])->name('donpr');
Route::post('/don/pour-projet', [App\Http\Controllers\Controllers::class, 'addproj']);

Route::get('/don/soutient', [App\Http\Controllers\Controllers::class, 'dons'])->name('dons');
Route::post('/don/soutient', [App\Http\Controllers\Controllers::class, 'addsoutien']);

Auth::routes();


Route::get('/profil', [App\Http\Controllers\Controllers::class, 'root'])->name('profil');
Route::get('/settings', [App\Http\Controllers\Controllers::class, 'root'])->name('settings');

// Dashboard
Route::get('/tableau-de-bord', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/profil', [App\Http\Controllers\Dashboard::class, 'profil'])->name('profil');
Route::get('/majprofil/{maj}', [App\Http\Controllers\Dashboard::class, 'majprofil'])->name('majprofil');
Route::post('/majprofil/{maj}', [App\Http\Controllers\Dashboard::class, 'UpdateProfil']);

Route::get('/parametre-du-compte', [App\Http\Controllers\Dashboard::class, 'setting'])->name('setting');

//Zone administrateurs
Route::middleware(['checkRole:ADMIN'])->group(function () {

    Route::get('/gestion-des-projets-de-dons', [App\Http\Controllers\Dashboard::class, 'aprojets'])->name('projets');
    Route::post('/gestion-des-projets-de-dons', [App\Http\Controllers\Dashboard::class, 'addprojet'])->name('addprojet');
    Route::get('/gestion-des-projets-de-dons/{projet}', [App\Http\Controllers\Dashboard::class, 'deleteprojet'])->name('deleteprojet');

    Route::get('/gestion-des-actualites', [App\Http\Controllers\Dashboard::class, 'aactu'])->name('aactu');
    Route::post('/gestion-des-actualites', [App\Http\Controllers\Dashboard::class, 'addactu']);

    Route::post('/gestion-des-realisations', [App\Http\Controllers\Dashboard::class, 'addrealisation'])->name('addrealisation');
    Route::put('/gestion-des-realisations/{realisation}', [App\Http\Controllers\Dashboard::class, 'updaterealisation'])->name('updaterealisation');

    Route::get('/gestion-des-projets-de-dons-detail', [App\Http\Controllers\Dashboard::class, 'agprojets'])->name('gestprojets');
    Route::get('/gestion-des-adhesion-a-la-fondation', [App\Http\Controllers\Dashboard::class, 'aadhesion'])->name('adhesion');
    Route::get('/gestion-des-contributeurs', [App\Http\Controllers\Dashboard::class, 'acontributeurs'])->name('contributeurs');
    Route::post('/gestion-des-contributeurs', [App\Http\Controllers\Dashboard::class, 'Updatecompt']);
    Route::get('/voir le profil/{id}', [App\Http\Controllers\Dashboard::class, 'dcompte'])->name('dcompte');

    Route::get('/gestion-des-recrutements', [App\Http\Controllers\Dashboard::class, 'arecrutements'])->name('recrutements');
    Route::post('/gestion-des-recrutements', [App\Http\Controllers\Dashboard::class, 'addrecrutement'])->name('addrecrutement');
    Route::post('/detail-des-comptes_de_demande', [App\Http\Controllers\Dashboard::class, 'addemande'])->name('addemande');

    Route::get('/presentation-de-la-fondation', [App\Http\Controllers\Dashboard::class, 'aapropos'])->name('aapropos');
    Route::post('/presentation-de-la-fondation', [App\Http\Controllers\Dashboard::class, 'addona'])->name('addona');
    Route::post('/presentation-de-la-fondations', [App\Http\Controllers\Dashboard::class, 'addfaq'])->name('addfaq');
    Route::post('/presentation-de-la-fondation-2', [App\Http\Controllers\Dashboard::class, 'addtbenevol'])->name('addtbenevol');
});

//Zone des contributeurs
Route::middleware(['checkRole:CONTRIBUTEUR'])->group(function () {

    Route::get('/tableau-de-bord/articles', [App\Http\Controllers\Dashboard::class, 'carticle'])->name('carticle');
    Route::get('/tableau-de-bord/gestion-des-articles', [App\Http\Controllers\Dashboard::class, 'cgarticle'])->name('cgarticle');
    Route::get('/tableau-de-bord/gestion-des-offres', [App\Http\Controllers\Dashboard::class, 'coffres'])->name('coffres');
    Route::get('/tableau-de-bord/gestion-des-realisation', [App\Http\Controllers\Dashboard::class, 'crealisation'])->name('crealisation');
    Route::get('/tableau-de-bord/gestion-des-dons', [App\Http\Controllers\Dashboard::class, 'cdon'])->name('cdon');
});
//Zone des abonnés
Route::middleware(['checkRole:USER'])->group(function () {

    Route::get('/mes-demandes', [App\Http\Controllers\Dashboard::class, 'demande'])->name('demande');
    Route::get('/gestion-de-mes-documents/{utilisateurId}', [App\Http\Controllers\Dashboard::class, 'documents'])->name('documents');
    Route::post('/gestion-de-mes-documents/{utilisateurId}', [App\Http\Controllers\Dashboard::class, 'addfile']);
});

Route::get('/tb', [App\Http\Controllers\Dashboard::class, 'home'])->name('tb');

//Zone de supression

Route::get('/delete/{fichier}', [App\Http\Controllers\Dashboard::class, 'Destroyfile'])->name('Destroyfile');
Route::get('/delete_compte/{compte}', [App\Http\Controllers\Dashboard::class, 'Destroycompte'])->name('Destroycompte');
Route::get('/delete_offre/{recrute}', [App\Http\Controllers\Dashboard::class, 'Destroyrecrute'])->name('Destroyrecrute');
Route::get('/delete_actualite/{actu}', [App\Http\Controllers\Dashboard::class, 'Destroyactu'])->name('Destroyactu');
Route::get('/delete_realisation/{realis}', [App\Http\Controllers\Dashboard::class, 'Destroyrealis'])->name('Destroyrealis');
Route::get('/delete_temoignage/{dona}', [App\Http\Controllers\Dashboard::class, 'Destroydona'])->name('Destroydona');
Route::get('/delete_faq/{faq}', [App\Http\Controllers\Dashboard::class, 'Destroyfaq'])->name('Destroyfaq');
Route::get('/delete_benevol/{benev}', [App\Http\Controllers\Dashboard::class, 'Destroybenev'])->name('Destroybenev');
