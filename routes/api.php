<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::get('mateuszguzy/305363/people', [PeopleController::class, 'index']);
Route::get('mateuszguzy/305363/people/{people}', [PeopleController::class, 'read']);
Route::delete('mateuszguzy/305363/people/{people}', [PeopleController::class, 'delete']);
Route::post('mateuszguzy/305363/people', [PeopleController::class, 'create']);
Route::put('mateuszguzy/305363/people/{people}', [PeopleController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});