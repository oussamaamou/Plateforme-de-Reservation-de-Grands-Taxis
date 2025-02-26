<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\ChauffeurPanel\ChauffeurController;
use App\Http\Controllers\PassagerPanel\PassagerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [PassagerController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:Administrateur'])->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});


Route::middleware(['auth', 'role:Chauffeur'])->group(function () {
    
    Route::get('chauffeur/dashboard', [ChauffeurController::class, 'index'])->name('chauffeur.dashboard');

});


Route::middleware(['auth', 'role:Passager'])->group(function () {
    
    Route::get('passager/dashboard', [PassagerController::class, 'index'])->name('passager.dashboard');

});


require __DIR__.'/auth.php';
