<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('pelatihan', 'App\Http\Controllers\PelatihanController@index');

Route::get('pelatihan/{id}', 'App\Http\Controllers\PelatihanController@show');

Route::post('pelatihan', 'App\Http\Controllers\PelatihanController@store');

Route::put('pelatihan/{id}', function ($id) {
    return response()->json(['message' => 'berhasil edit pelatihan'], 200);
});

Route::delete('pelatihan/{id}', function () {
    return response()->json(['message' => 'berhasil hapus pelatihan'], 204);
});
