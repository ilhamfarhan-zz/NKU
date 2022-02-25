<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NKUController;

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
    return view('index');
});


Route::resource('nku', NKUController::class);
route::get('/Home',[NKUController::class,'index'])->name('index');
route::get('/About',[NKUController::class,'about'])->name('about');
route::get('/EventConcept',[NKUController::class,'EventConcept'])->name('EventConcept');
route::get('/EventEntertainment',[NKUController::class,'EventEntertainment'])->name('EventEntertainment');
route::get('/EventManagement',[NKUController::class,'EventManagement'])->name('EventManagement');
route::get('/MediaExposure',[NKUController::class,'MediaExposure'])->name('MediaExposure');
route::get('/Mice',[NKUController::class,'Mice'])->name('Mice');
route::get('/List-Event',[NKUController::class,'list'])->name('list');
route::get('/Image-Event',[NKUController::class,'image'])->name('image');
