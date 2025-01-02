<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DirectorController;
use App\Models\Branch;


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

    // Route::get('/', function () {
    //     return view('welcome');
    // });


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/industry', [IndustryController::class, 'index'])->name('industry');
Route::get('/industry/{id}', [IndustryController::class, 'show'])->name('industry.details');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/board-of-directors', [DirectorController::class, 'index'])->name('directors');

Route::get('/branches', function () {
    $branches = Branch::all();
    return view('frontend.layouts.branch', compact('branches'));
});
