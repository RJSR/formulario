<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\RedesController;
use App\Models\Datos;
use App\Models\Colors;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [ProfileController::class, 'index']);

Route::get('/dashboard', function () {
    
    $datos = Datos::all();
    $colors = Colors::all();
    return Inertia::render('Dashboard',compact('datos','colors'));
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('dato', DatosController::class);
    
    Route::resource('color', ColorsController::class);
    Route::resource('red', RedesController::class);
    
    Route::get('/api/color', function (Request $request) {
        $colors = Colors::all();
        return $colors->toArray();
    });
    
});

require __DIR__.'/auth.php';
