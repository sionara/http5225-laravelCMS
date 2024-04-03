<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SaleController;
use App\Models\Item;
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
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [EmployeeController::class, 'trash']
)->name('students.trash');

Route::get(
    'students/trashed/',
    [EmployeeController::class, 'trashed']
)->name('students.trashed');

Route::get(
    'students/restore/{id}',
    [EmployeeController::class, 'trash']
)->name('students.restore');

Route::get(
    'students/trash/{id}',
    [SaleController::class, 'trash']
)->name('students.trash');

Route::get(
    'students/trashed/',
    [SaleController::class, 'trashed']
)->name('students.trashed');

Route::get(
    'students/restore/{id}',
    [SaleController::class, 'trash']
)->name('students.restore');

Route::get(
    'students/trash/{id}',
    [ItemController::class, 'trash']
)->name('students.trash');

Route::get(
    'students/trashed/',
    [ItemController::class, 'trashed']
)->name('students.trashed');

Route::get(
    'students/restore/{id}',
    [ItemController::class, 'trash']
)->name('students.restore');


Route::resource('employees', EmployeeController::class);
Route::resource('sales', SaleController::class);
Route::resource('Item', ItemController::class);
