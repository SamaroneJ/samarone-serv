<?php

/*use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;*/


Route::apiResource('login','App\Http\Controllers\api\UsuarioController');


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
