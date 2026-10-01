<?php

use App\Http\Controllers\Api\RobotController;
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

// Farm OS — robot fleet API (token: X-Robot-Token header or ?token=, see ROBOT_API_TOKEN)
Route::middleware('robot')->prefix('robot')->group(function () {
    Route::get('/missions', [RobotController::class, 'missions']);
    Route::post('/missions/complete', [RobotController::class, 'complete']);
    Route::get('/lots', [RobotController::class, 'lots']);
    Route::post('/lots/status', [RobotController::class, 'lotStatus']);
});
