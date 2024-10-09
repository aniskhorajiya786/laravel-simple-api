<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('blog',[ApiController::class,'index']);
Route::post('postblog',[ApiController::class,'post']);
Route::put('editpost/{id}',[ApiController::class,'editpost']);
Route::delete('deletepost/{id}',[ApiController::class,'deletepost']);