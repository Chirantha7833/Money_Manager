<?php

use App\Http\Controllers\ProfileController;
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
    return view('home');
});

 Route::get('/dashboard', function () {
     return view('mydashboard');
 })->middleware(['auth', 'verified'])->name('mydashboard');

 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

require __DIR__.'/auth.php';

// RevenueControl
Route::get('/make-revenue', 'App\Http\Controllers\RevenueController@revenuepage')->middleware('auth');
Route::post('/make-revenue','App\Http\Controllers\RevenueController@submitrevenue')->middleware('auth');
Route::get('/revenue-history', 'App\Http\Controllers\RevenueController@revenuehistory')->middleware('auth');

// ExpenditureControl
Route::get('/make-expenditure', 'App\Http\Controllers\ExpenditureController@expenditurepage')->middleware('auth');
Route::post('/make-expenditure', 'App\Http\Controllers\ExpenditureController@submitexpenditure')->middleware('auth');
Route::get('/expenditure-history', 'App\Http\Controllers\ExpenditureController@expenditurehistory')->middleware('auth');

// BalanceControl
Route::get('/dashboard', 'App\Http\Controllers\BalanceController@balance')->middleware('auth');

// PassBookControl
Route::get('/pass-book', 'App\Http\Controllers\PassBookController@viewpassbook')->middleware('auth');
Route::post('/make-revenue', 'App\Http\Controllers\PassBookController@addrevenue')->middleware('auth');
Route::post('/make-expenditure', 'App\Http\Controllers\PassBookController@addexpenditure')->middleware('auth');

Route::get('/passbook/export', 'App\Http\Controllers\PassBookController@export');



