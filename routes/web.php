<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoController02;
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




Route::get("/demofirst", [DemoController::class, 'Demo01']);
Route::get("/demosecound", [DemoController::class, 'Demo02']);

Route::get("/demo03/{email}", [DemoController::class, 'demo03']);
Route::get("/demoac/{email}/{pass}", [DemoController::class, 'DemoAction0']);


Route::get("/demoac", [DemoController::class, 'demoAction1']);
Route::get("/demoac", [DemoController::class, 'demoAction2']);
Route::get("/demoac", [DemoController::class, 'demoAction3']);


Route::get('/DemoAction/{$num1}/{$num2}', [DemoController02::class, 'create']);


Route::get('/SessionPut/{email}', [DemoController02::class, 'SessionPut']);
Route::get('/SessionPull', [DemoController02::class, 'SessionPull']);
Route::get('/SessionForget', [DemoController02::class, 'SessionForget']);
Route::get('/SessionFlush', [DemoController02::class, 'SessionFlush']);





