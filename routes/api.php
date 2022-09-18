<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostController1;
use App\Http\Controllers\Api\V2\PostController as PostController2;
use Laravel\Sanctum\Sanctum;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('v1/posts',PostController1::class)
    ->only(['index', 'show' , 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts',PostController2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class,
    'login'
]);
