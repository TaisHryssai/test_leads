<?php

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

Route::get('/leads', [App\Http\Controllers\LeadController::class, 'index'])->name('lead.index');
Route::get('/leads/new', [App\Http\Controllers\LeadController::class, 'create'])->name('lead.create');
Route::post('/leads/new', [App\Http\Controllers\LeadController::class, 'store'])->name('lead.store');
Route::get('/leads/{id}/show', [App\Http\Controllers\LeadController::class, 'show'])->name('lead.show');
Route::get('/leads/{id}/edit', [App\Http\Controllers\LeadController::class, 'edit'])->name('lead.edit');
Route::patch('/leads/{id}', [App\Http\Controllers\LeadController::class, 'update'])->name('lead.update');
Route::delete('/leads/{id}', [App\Http\Controllers\LeadController::class, 'destroy'])->name('lead.destroy');


Route::get('/links', [App\Http\Controllers\LinkController::class, 'index'])->name('link.index');
Route::get('/leads/{id}/link/new', [App\Http\Controllers\LinkController::class, 'create'])->name('link.create');
Route::post('/leads/{id}/link/new', [App\Http\Controllers\LinkController::class, 'store'])->name('link.store');