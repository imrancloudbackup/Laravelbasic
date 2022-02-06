<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\User;

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

Route::get('/home', function () {
    echo "this is home page";
});

Route::get('/about', function () {
    return view('about');
})->middleware('checkage');

Route::get('/contact',[ContactController::class,'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

   // $users = User::all(); // First method using Model to get data

   $users = DB::table('users')->get();
    return view('dashboard',compact('users'));
})->name('dashboard');
