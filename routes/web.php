<?php

use App\Http\Controllers\MailerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
})->name('/');
Route::get('/nuestra-trayectoria', function () {
    return view('nuestra-trayectoria.index');
})->name('nuestra-trayectoria');
Route::get('/nuestro-equipo', function () {
    return view('nuestro-equipo.index');
})->name('nuestro-equipo');
Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto');

Route::prefix('cms')->group( function () {
    Route::resource('seo', SeoController::class);
    Route::resource('page', PageController::class);
});

Route::get('quienes-somos', [SeoController::class, 'quienesSEO'])->name('quienes-somos');

Route::post('contacto', [MailerController::class, 'contactoForm'])->name('contacto');
Route::post('integracion', [MailerController::class, 'integracionForm'])->name('integracion');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
