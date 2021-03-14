<?php

use App\Http\Controllers\ChapterController;
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

Route::get('/', [ChapterController::class,'ViewjuzaInfo'])->name('ViewjuzaInfo');
Route::get('/chapters/{chapter_id}/info', [ChapterController::class,'chapterinfo'])->name('chapterinfo');
Route::get('/chapters/{chapter_id}/verses/{page}', [ChapterController::class,'chaptervers'])->name('chaptervers');
