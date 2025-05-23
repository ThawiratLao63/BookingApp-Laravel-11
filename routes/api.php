<?php

use App\Http\Controllers\ManageUsersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users/{id}', function ($id) {
        return App\Models\User::findOrFail($id);
    });
    Route::get('/users/{id}/buildings', [ManageUsersController::class, 'getUserBuildings']);
});
