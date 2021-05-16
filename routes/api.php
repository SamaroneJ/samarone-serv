<?php

/*use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;*/


Route::apiResource('login','App\Http\Controllers\api\UsuarioController');
Route::apiResource('logout','App\Http\Controllers\LogoutController');
Route::apiResource('addUser','App\Http\Controllers\addUserController');
Route::apiResource('chamado','App\Http\Controllers\ChamadoController');
Route::apiResource('addChamado','App\Http\Controllers\addChamadoController');


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
