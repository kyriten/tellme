<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    return view('landingpage');
})->name('landing-page');

// Spatie: Role and Permission
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

// Sidebar Admin
Route::get('/dashboard/manage-complaint', function () {
    return view('admin.manage-complaint');
})->middleware(['auth', 'role:admin'])->name('admin.managecomplaint');

Route::get('/dashboard/manage-user', function () {
    return view('admin.manage-user');
})->middleware(['auth', 'role:admin'])->name('admin.manageuser');

Route::get('/dashboard/manage-permission', function () {
    return view('admin.manage-permission');
})->middleware(['auth', 'role:admin'])->name('admin.managepermission');

Route::get('/dashboard/settings', function () {
    return view('admin.settings');
})->middleware(['auth', 'role:admin'])->name('admin.settings');

// Profile Admin
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/profile', [AdminController::class, 'edit'])->name('edit');
    Route::patch('/profile', [AdminController::class, 'update'])->name('update');
});

// Breeze Default
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
