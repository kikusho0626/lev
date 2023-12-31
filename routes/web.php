<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
use App\Http\Controllers\CategoryController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
// '/posts にGetリクエストが来たら、PostControllerのindexメソッドを実行する
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::delete('/posts/{post}', [PostController::class, 'delete']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::put('/posts/{post}', [PostController::class ,'update']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::post('/posts', [PostController::class, 'store']);
Route::get('/categories/{category}', [CategoryController::class,'index']);
