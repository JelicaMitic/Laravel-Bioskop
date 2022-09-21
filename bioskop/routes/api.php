<?php
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReziserController;
use App\Http\Controllers\API\AuthController;
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

Route::get('reziser',[ ReziserController::class, 'index' ]);
Route::get('reziser/{reziser}',[ ReziserController::class, 'show' ]);
Route::get('film',[ FilmController::class, 'index' ]);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);



Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::delete('reziser/{reziser}',[ ReziserController::class, 'destroy' ]);
    Route::post('reziser',[ ReziserController::class, 'store' ]);
    Route::post('/film/{film}', [FilmController::class, 'update']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
