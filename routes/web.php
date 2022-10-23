<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotariusQueueController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/notarius/create', [NotariusQueueController::class, 'store'])->name('notarius.create');

require __DIR__ . '/auth.php';
