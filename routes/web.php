<?php

use App\Models\Album;
use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * 歌手
 */
// 一覧
Route::get('/', function () {
    return view('welcome');
});
// 登録
Route::post('/singers', function (Request $request) {
    //
});
// 削除
Route::delete('/singer/{singer}', function (Singer $singer) {
    //
});

/**
 * アルバム
 */
// 一覧
Route::get('/', function () {
    return view('welcome');
});
// 登録
Route::post('/albums', function (Request $request) {
    //
});
// 削除
Route::delete('/album/{album}', function (Album $album) {
    //
});

/**
 * 曲
 */
// 一覧
Route::get('/', function () {
    return view('welcome');
});
// 登録
Route::post('/songs', function (Request $request) {
    //
});
// 削除
Route::delete('/song/{song}', function (Song $song) {
    //
});
