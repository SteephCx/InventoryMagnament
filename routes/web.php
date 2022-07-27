<?php

use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
});


//Admin all Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');

});

Route::controller(OrdenTrabajoController::class)->group(function (){

    Route::post('orden/create','store')->name('orden.store');
    Route::get('orden/create','create')->name('orden.create');
    Route::resource("/ordentrabajo",OrdenTrabajoController::class);
    Route::get('orden/imagen','imagen')->name('orden.imagen');


});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
