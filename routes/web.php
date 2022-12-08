<?php

use App\Http\Controllers\StudentController;
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

Route::get('/students/index', [StudentController::class, 'index'])->name('students.index');
//Sukurimo formos rodymas
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
//Sukurimo formos duomenų išsaugojimas
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

//Trynimas





Route::post('/students/destroy/{student}',[StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/show/{student}', [StudentController::class, 'show'])->name('students.show');

