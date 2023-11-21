<?php
use App\Http\Controllers\BandController;
use App\Http\Controllers\novoSistemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ 

Route::get('busca', function(){
    return 'ALELUIA!!!';
});

Route::post('/envio1/{name}',[novoSistemaController::class,'teste'])->name('envio1');

Route::get('/bands',[BandController::class,'getAll'])->name('bands');
 
Route::get('/bands/{id}',[BandController::class,'getById']);

Route::get('/bands/gender/{gender}',[BandController::class,'getByGender']);

Route::post('/bands/store',[BandController::class,'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
