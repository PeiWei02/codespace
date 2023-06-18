<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('learning', LearningController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('forum', ForumController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('quiz', QuizController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/learning/create', [LearningController::class, 'create'])->name('learning.create');

Route::get('/learning/{learning}', [LearningController::class, 'show'])->name('learning.show');

Route::get('/learning/{learning}/edit', [LearningController::class, 'edit'])->name('learning.edit');

Route::put('/learning/{learning}', [LearningController::class, 'update'])->name('learning.update');

Route::delete('/learning/{learning}', [LearningController::class, 'destroy'])->name('learning.destroy');




require __DIR__ . '/auth.php';
