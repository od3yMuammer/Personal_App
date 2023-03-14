<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProcesesController;
use App\Http\Controllers\SettingsController;
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


//Route::get('/', function () {
//    return view('admin.dashboard.index');
//});
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/Lpost',[\App\Http\Controllers\HomeController::class,'Lpost'])->name('Lpost');

Route::get('/contact', [MessagesController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [MessagesController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(callback: function () {

    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

    Route::resource('posts', \App\Http\Controllers\PostController::class);
    Route::get('posts/restore/{id}', [\App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
    Route::get('posts/forceDelete/{id}', [\App\Http\Controllers\PostController::class, 'forceDelete', 'id'])->name('posts.forceDelete');

    Route::resource('sections', \App\Http\Controllers\SectionController::class);
    Route::get('sections/restore/{id}', [\App\Http\Controllers\SectionController::class, 'restore'])->name('sections.restore');
    Route::get('sections/forceDelete/{id}', [\App\Http\Controllers\SectionController::class, 'forceDelete', 'id'])->name('sections.forceDelete');

    Route::resource('admins', AdminController::class);
    Route::get('admins/restore/{id}', [AdminController::class, 'restore'])->name('admins.restore');
    Route::get('admins/forceDelete/{id}', [AdminController::class, 'forceDelete', 'id'])->name('admins.forceDelete');

    Route::resource('settings', SettingsController::class);
    Route::resource('proceses_log', ProcesesController::class);
    Route::resource('messages', MessagesController::class);




    Route::get('/logout', function () {
        Auth::logout();
        return redirect("/login");
    })->name('logout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
