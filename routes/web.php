<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\VacantController;

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

Route::group(['middleware'=> ['auth:sanctum', 'verified']], function(){
    Route::get("dashboard", function(){
        return view('dashboard');
    })->name('dashboard');
    // Route::get("dashboard/vacant", [VacantController::class, 'getVacant'])->name('getVacant');
    // Route::post("dashboard/store", [VacantController::class, 'store'])->name('dashboard.store');
    // Route::patch("dashboard/vacant/{dashboard}/update", [VacantController::class, 'update'])->name('dashboard.update');
    //Route::resource("dashboard", VacantController::class)->except(['index', 'show', 'update']);

});