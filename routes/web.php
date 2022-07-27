<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Models\contacts;

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

Route::get('/',[contactController::class, 'index']);

Route::get('/contacts/create', [contactController::class, 'create']);

Route::post('/contacts', [contactController::class, 'store']);


Route::get('/contacts/{contact}/edit',[contactController::class, 'edit']);

Route::put('/contacts/{contact}',[contactController::class, 'update'])->name('contacts.update');

Route::delete('/contacts/{contact}/{page}', [contactController::class, 'destroy'])->name('contacts.destroy');
