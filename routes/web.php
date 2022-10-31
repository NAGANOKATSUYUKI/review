<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [PostController::class, "index"]);
Route::get("/URL-1/create",   [PostController::class, "create"]);
Route::get("/URL-1/{hensu4}", [PostController::class, "show"]);
Route::post("/URL-1", [PostController::class, "store"]);
Route::get("/URL-1/{hensu5}/edit", [PostController::class, "edit"]);
Route::put("/URL-1/{hensu7}" , [PostController::class, "update"]);
Route::delete("/URL-1/{hensu2}", [PostController::class, "delete"]);