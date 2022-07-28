<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
/*Route::get('/create-student', function(){
    return view('create');
});*/

Route::get('/create-student',[StudentController::class,'create'])->name('users.create');
Route::post('/create-student',[StudentController::class,'store'])->name('users.store');
Route::get('/edit-student/{id}',[StudentController::class,'edit'])->name('users.edit');
Route::post('/edit-student/{id}',[StudentController::class,'update'])->name('users.update');
Route::get('/delete-student/{id}',[StudentController::class,'destroy'])->name('users.destroy');



Route::get('/students',[StudentController::class,'index'])->name('users.index');


Route::get('/', function () {
    return view('frontend');
});
