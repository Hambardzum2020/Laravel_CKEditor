<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DataController;

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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/index',[ArticleController::class, 'index']);
Route::post('upload',[ArticleController::class, 'upload'])->name('upload');
Route::post('data',[DataController::class, 'data']);