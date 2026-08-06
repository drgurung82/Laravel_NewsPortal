<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/category/news", [PageController::class, "about"])->name("news");
Route::get("/category/entertainment", [PageController::class, "contact"])->name("entertainment");
Route::get("/category/sports", [PageController::class, "contact"])->name("sports");
Route::get("/category/thoughts", [PageController::class, "contact"])->name("thoughts");
Route::get("/category/education", [PageController::class, "contact"])->name("education");
Route::get("/category/health", [PageController::class, "contact"])->name("health");
Route::get("/category/economy", [PageController::class, "contact"])->name("economy");
Route::get('/search', [PageController::class, 'search'])->name('search');
