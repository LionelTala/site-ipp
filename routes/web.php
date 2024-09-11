<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MessageController;
use App\Models\Message;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

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
    return view('home');
})->name('home');

Route::get('/Nos Specialites', function(){
    return view('formation');
})->name('formation');

Route::get('/Pre-Inscription', function(){
    return view('inscription');
})->name('inscription');

Route::get('/Contact', function(){
    return view('contact');
})->name('contact');

Route::post('/save', [InscriptionController::class, 'save'])->name('save');
Route::get('/Candidature', [InscriptionController::class, 'get'])->name('admin-home')->middleware('auth');
Route::get('/AdminIPP', [AdminController::class, 'home'])->name('homeAdmin');
Route::get('/login', [AdminController::class, 'home'])->name('homeAdmin');

Route::post('/login',[AdminController::class,'login'])->name('login');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');


Route::post('/message', [MessageController::class, 'new'])->name('newMessage');
Route::get('/Admin-Message', [MessageController::class, 'get'])->name('getMessage')->middleware('auth');
 

