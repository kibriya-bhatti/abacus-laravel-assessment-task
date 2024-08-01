<?php

use App\Http\Controllers\{
    TaskController,
    UserController
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
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
    if(Auth::check()){
        return redirect()->intended(RouteServiceProvider::Dashboard);
    }
    return redirect("/login");
});
Route::middleware(['auth'])->group(function(){;
    Route::get("tasks",[TaskController::class,"index"]);
    Route::post("tasks",[TaskController::class,"store"]);
});
require __DIR__.'/auth.php';


