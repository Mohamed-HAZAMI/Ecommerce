<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::middleware('api')->group(function () {
    Route::get('categories', [CategorieController::class, 'index']); // List categories
    Route::post('categories', [CategorieController::class, 'store']); // Create category
    Route::get('categories/{id}', [CategorieController::class, 'show']); // Show category
    Route::put('categories/{id}', [CategorieController::class, 'update']); // Update category
    Route::delete('categories/{id}', [CategorieController::class, 'destroy']); // Delete category
});
