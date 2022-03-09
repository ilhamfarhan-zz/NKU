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
route::get('/Conference',[NKUController::class,'conference'])->name('conference');
route::get('/Entertainment',[NKUController::class,'entertainment'])->name('entertainment');
route::get('/Exhibitions',[NKUController::class,'exhibitions'])->name('exhibitions');
route::get('/Incentives',[NKUController::class,'incentives'])->name('incentives');
route::get('/Meetings',[NKUController::class,'meetings'])->name('meetings');
route::get('/List-Event',[NKUController::class,'list'])->name('list');
route::get('/Image-Event',[NKUController::class,'image'])->name('image');
route::get('/Contact',[NKUController::class,'contact'])->name('contact');
