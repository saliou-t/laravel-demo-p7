<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('articles', [ArticleController::class, 'myFunction']);

Route::get('article/{id}', [ArticleController::class, 'afficher_details']);

Route::get('articles/new', function () {
    return view('articles/new');
})->name('formulaire_creation_article');


Route::post('article/traitement', [ArticleController::class, 'ajouter_article'])->name('traitement_creation_article');