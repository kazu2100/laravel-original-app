<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ViewerController;
use App\Http\Controllers\InspectionController;

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
Route::get('/welcome', function() {
  return view('welcome');
});
Route::middleware('auth.basic')->group(function(){




  // // 投稿の作成ページ
  // Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

  // // 投稿の作成機能
  // Route::post('/items', [ItemController::class, 'store'])->name('items.store');

  // // indexページ
  // Route::get('/items', [ItemController::class, 'index'])->name('items.index');

  // // 投稿の詳細ページ
  // Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');

  // // 投稿の更新ページ
  // Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');

  // // 投稿の更新機能
  // Route::patch('/items/{item}', [ItemController::class, 'update'])->name('items.update');

  // // 投稿の削除機能
  // Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
  Route::resource('items', ItemController::class);

});

// ホーム画面
Route::get('/', [ViewerController::class, 'home'])->name('viewers.home');

// 診断開始画面
Route::get('/inspection/{question}', [InspectionController::class, 'show'])->name('inspection.show');

// 診断終了画面
Route::get('/finspection', [InspectionController::class, 'finish'])->name('inspection.finish');

// 診断結果画面
Route::get('/result', [ViewerController::class, 'result'])->name('viewers.result');