<?php

use App\Http\Controllers\LatestNewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionsController;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

                //---------Institutions routes----------//
//make sure your Api link is something like this: http://127.0.0.1:8000/api/institutions/inst
Route::group(['prefix'=>'institutions'],function(){
//show all institutions
Route::get('/inst',[InstitutionsController::class,'index']);
//show a specific institution
Route::get('/inst/{instid}',[InstitutionsController::class,'show']);
//insert new institution
Route::post('/inst',[InstitutionsController::class,'store']);
//update existing institution
Route::post('/inst/{instid}',[InstitutionsController::class,'update']);
//remove existing institution
Route::delete('/inst/{instid}',[InstitutionsController::class,'destroy']);
//remove all Institutions
Route::get('/destroyall',[InstitutionsController::class,'destroy_all']);
});




//Route to get all the latest news
Route::get("/AllLatestNews" , [LatestNewsController::class , 'index']);
//Route to get a specific show by id
Route::get("/latestNews/{id}" , [LatestNewsController::class , 'show']);
//Route to show some news on the main page
Route::get("/FewLatestNews" , [LatestNewsController::class ,'view']);



