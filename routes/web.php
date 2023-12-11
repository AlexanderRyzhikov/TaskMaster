<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskPointController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/go', function () {
    return view('index');
})->name('index');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/registration', [RegisterController::class, 'save'])->name('registrationPost');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('loginPost');

Route::middleware(['auth'])->group(function () {
    Route::get('/account', function () {
        return view('account');
    })->name('account');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::post('/user', [UserController::class, 'edit'])->name('userEdit');

    Route::get('/', [TaskController::class, 'index'])->name('task');
    Route::post('/task', [TaskController::class, 'create'])->name('taskCreate');
    Route::post('/task/edit', [TaskController::class, 'edit'])->name('taskEdit');
    Route::post('/task/delete', [TaskController::class, 'delete'])->name('taskDelete');
    Route::post('/task_point', [TaskPointController::class, 'create'])->name('taskPointCreate');
    Route::post('/task_point/edit', [TaskPointController::class, 'edit'])->name('taskPointEdit');
    Route::post('/task_point/delete', [TaskPointController::class, 'delete'])->name('taskPointDelete');
});
