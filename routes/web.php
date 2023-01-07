<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/categories', [ClientController::class, 'allCategory'])->name('categories');
Route::post('/quiz', [ClientController::class, 'getQuiz'])->name('quiz');
Route::get('/quiz', [ClientController::class, 'getRandomQuiz'])->name('randomQuiz');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/manage-categories', [CategoryController::class, 'manageCategory'])->name('manage.categories');
    Route::post('/add-category', [CategoryController::class, 'addCategory'])->name('add.category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
    Route::get('/manage-categories/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update.category');


    Route::get('/add-quiz', [QuizController::class, 'addQuiz'])->name('add.quiz');
    Route::post('/save-quiz', [QuizController::class, 'saveQuiz'])->name('save.quiz');
    Route::get('/manage-quiz', [QuizController::class, 'manageQuiz'])->name('manage.quiz');
    Route::get('/delete-quiz/{id}', [QuizController::class, 'deleteQuiz'])->name('delete.quiz');
    Route::get('/logout', [LogoutController::class, 'logoutUser'])->name('log.out');

});
