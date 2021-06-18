<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteUrl;

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

Route::get('/', [SiteUrl::class, 'index'])->name('home');
Route::get('actu', [SiteUrl::class, 'actu'])->name('actu');
/*Data view*/
Route::get('datas/info', [SiteUrl::class, 'datasInfo'])->name('datas.info');
Route::get('datas/pcd', [SiteUrl::class, 'datasPcd'])->name('datas.pcd');
Route::get('datas/budget', [SiteUrl::class, 'datasBudget'])->name('datas.bg');
Route::get('datas/budget/mbudget', [SiteUrl::class, 'getBudget'])->name('budget');
Route::get('datas/budget/mbudgetn', [SiteUrl::class, 'getBudgetN'])->name('budgetn');

Route::get('datas/tdb', [SiteUrl::class, 'datasTdb'])->name('datas.tdb');
Route::get('datas/cmp', [SiteUrl::class, 'datasCompare'])->name('datas.cmp');

/*user*/
Route::get('login', [SiteUrl::class, 'login'])->name('login');
Route::get('sign', [SiteUrl::class, 'signup'])->name('signup');
Route::get('forum', [SiteUrl::class, 'forum'])->name('forum');
Route::get('contact', [SiteUrl::class, 'contact'])->name('contact');
Route::get('about', [SiteUrl::class, 'about'])->name('about');
Route::get('test', [SiteUrl::class, 'test'])->name('test');

//Route::delete('films/force/{id}', [FilmController::class, 'forceDestroy'])->name('films.force.destroy');
