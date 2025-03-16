<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ListBarangController;

 Route::get('/welcome', function () {
     return view('welcome');
 });

 Route::get('/user/{id}', function ($id) {
     return 'User dengan ID ' .$id;
 });


Route::prefix('admin')->group(function () {
     Route::get('/dashboard', function () {
         return 'Admin Dashboard';
     });

     Route::get('/users', function () {
         return 'Admin Users';
     });
 });

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index']);

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);

use App\Http\Controllers\ListItemController;

Route::get('/list-item', [ListItemController::class, 'index']);





 
 
