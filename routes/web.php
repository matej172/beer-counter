<?php

use App\Http\Controllers\GatheringController;
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
    redirect('gathering.index');
});

Route::resource('gathering', GatheringController::class)->only(['show', 'index', 'store', 'update']);
