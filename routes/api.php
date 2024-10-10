<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\ArticleController;

Route::middleware('api')->group(function () {
    // Category Routes
    Route::get('categories', [CategorieController::class, 'index']); // List categories
    Route::post('categories', [CategorieController::class, 'store']); // Create category
    Route::get('categories/{id}', [CategorieController::class, 'show']); // Show category
    Route::put('categories/{id}', [CategorieController::class, 'update']); // Update category
    Route::delete('categories/{id}', [CategorieController::class, 'destroy']); // Delete category

    // Subcategory (Scategorie) Routes
    Route::get('scategories', [ScategorieController::class, 'index']); // List subcategories
    Route::post('scategories', [ScategorieController::class, 'store']); // Create subcategory
    Route::get('scategories/{id}', [ScategorieController::class, 'show']); // Show subcategory
    Route::put('scategories/{id}', [ScategorieController::class, 'update']); // Update subcategory
    Route::delete('scategories/{id}', [ScategorieController::class, 'destroy']); // Delete subcategory
    
    // Custom route to show subcategories by category
    Route::get('scat/{idcat}', [ScategorieController::class, 'showSCategorieByCAT']);

    // Article Routes
    Route::get('articles', [ArticleController::class, 'index']); // List all articles
    Route::post('articles', [ArticleController::class, 'store']); // Create an article
    Route::get('articles/{id}', [ArticleController::class, 'show']); // Show specific article
    Route::put('articles/{id}', [ArticleController::class, 'update']); // Update an article
    Route::delete('articles/{id}', [ArticleController::class, 'destroy']); // Delete an article

    // Custom route to show articles by subcategory
    Route::get('articlesbyscat/{scategorieID}', [ArticleController::class, 'showArticlesByScategorie']);
});