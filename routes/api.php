<?php

use App\Http\Controllers\LatestNewsController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



//Route to get all the latest news
Route::get("/AllLatestNews" , [LatestNewsController::class , 'index']);
//Route to get a specific show by id
Route::get("/latestNews/{id}" , [LatestNewsController::class , 'show']);
//Route to show some news on the main page
Route::get("/FewLatestNews" , [LatestNewsController::class ,'view']);


