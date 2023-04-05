<?php

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
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

Route::get('/', [GameController::class, 'index'])->name('home');
Route::resources([
    'games' => GameController::class,
    'consoles' => ConsoleController::class,
    'genres' => GenreController::class,
]);
