<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/categorie/index', [CategorieController::class, 'index'])->name('cat.index');
Route::get('/categorie/form', [CategorieController::class, 'form'])->name('cat.form');
Route::get('/categorie/delete/{id}', [CategorieController::class, 'delete'])->name('cat.delete');
Route::get('/categorie/form-edit/{id}', [CategorieController::class, 'formEdit'])->name('cat.form.edit');
Route::post('/categorie/edit', [CategorieController::class, 'edit'])->name('cat.edit');
Route::post('/categorie/save', [CategorieController::class, 'save'])->name('cat.save');


Route::get('/article/index', [ArticleController::class, 'index'])->name('art.index');
Route::get('/article/form', [ArticleController::class, 'form'])->name('art.form');
Route::get('/article/delete/{id}', [ArticleController::class, 'delete'])->name('art.delete');
Route::get('/article/form-edit/{id}', [ArticleController::class, 'formEdit'])->name('art.form.edit');
Route::post('/article/edit', [ArticleController::class, 'edit'])->name('art.edit');
Route::post('/article/save', [ArticleController::class, 'save'])->name('art.save');
