<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfectedInTokyosController;

/*
 * --------------------------------------------------------------------------
 * Web Routes
 * --------------------------------------------------------------------------
 *
 * Laravel 8以降では、ルーティングの使用が変更されている
 * 1. 上部にコントローラーのパスを入力すること
 * 2. Route::get('パス', [コントローラー名::class, 'コントローラー内の関数名']); という表記に従うこと
 *  * getの部分はpostに変更してもよい
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [InfectedInTokyosController::class, 'test']);