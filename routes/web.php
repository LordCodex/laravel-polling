<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollingUnitController;
use App\Http\Controllers\SummedTotalResultController;


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

//QUESTION 1
Route::get('/polling-unit', [PollingUnitController::class, 'index']);
Route::post('/polling-unit/result', [PollingUnitController::class, 'show'])->name('polling_unit.show');


//QUESTION 2
Route::get('/summed-total-result', [SummedTotalResultController::class, 'index'])->name('summed-total-result.index');
Route::post('/summed-total-result/show', [SummedTotalResultController::class, 'show'])->name('summed-total-result.show');


Route::get('/', function () {
    return view('welcome');
});
