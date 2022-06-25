<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\DamenController;
use App\Http\Controllers\Blog\ErvaringController;
use App\Http\Controllers\Blog\FeedbackController;
use App\Http\Controllers\Blog\StudiekeuzeController;
use App\Http\Controllers\Blog\SwotController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/faq', [FaqsController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/dashboards', [ContactController::class, 'index'])->middleware(['auth']);
Route::get('/blog/damen', [DamenController::class, 'show']);
Route::get('/blog/ervaring', [ErvaringController::class, 'show']);
Route::get('/blog/feedback', [FeedbackController::class, 'show']);
Route::get('/blog/studiekeuze', [StudiekeuzeController::class, 'show']);
Route::get('/blog/swot', [SwotController::class, 'show']);

Route::post('/contact', [ContactController::class, 'create']);
