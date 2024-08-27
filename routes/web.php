<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessUrlController;
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
    return view('index');
});

Route::post('/processUrl' ,[ProcessUrlController::class, 'Url'])->name('process.url');


