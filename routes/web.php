<?php


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
Route::get('p/create', [App\Http\Controllers\PostsController::class, 'create'])
    ->name('post.create');

Route::post('p', [App\Http\Controllers\PostsController::class, 'store'])
    ->name('post.store');

Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])
    ->name('profile.index');

Route::get('p/{post}', [App\Http\Controllers\PostsController::class, 'show'])
    ->name('post.show');

Route::get('profile/{user}/edit',[App\Http\Controllers\ProfilesController::class, 'edit'])
    ->name('profile.edit');

Route::patch('profile/{user}',[App\Http\Controllers\ProfilesController::class, 'update'] )
    ->name('profile.update');

Route::get('home', function(){
    return view('home');
});

