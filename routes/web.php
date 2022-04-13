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
Route::get('/quienes-somos', function () {
    return view('quienes-somos.index');
})->name('quienes-somos');
Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto');

Route::get('/aviso-de-privacidad', function () {
    return view('/aviso-de-privacidad');
})->name('aviso-de-privacidad');

Route::get('/gracias', function () {
    return view('/gracias');
})->name('gracias');

// Route::prefix('cms')->group( function () {
//     Route::resource('seo', SeoController::class);
//     Route::resource('page', PageController::class);
// });

Route::post('contacto', [MailerController::class, 'contactoForm'])->name('contacto.form');


require __DIR__.'/auth.php';
