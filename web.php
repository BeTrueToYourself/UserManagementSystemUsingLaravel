<?php

use App\Http\Controllers\StoreImageController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/m', function () {
        return view('master');
    });
Route::get('/create_account',[App\Http\Controllers\LoginController::class, 'index']);


Route::post('/create',[App\Http\Controllers\LoginController::class, 'create']);


Route::get('/login',[App\Http\Controllers\LoginController::class, 'login']);


Route::post('/check',[App\Http\Controllers\LoginController::class, 'check_user']);


Route::get('/welcome',[App\Http\Controllers\LoginController::class, 'protect']);

Route::get('/logout',[App\Http\Controllers\LoginController::class, 'logout']);



Route::get('preview-image-upload', [App\Http\Controllers\simple_image_upload\ImageUploadController::class,'index']);
Route::post('preview-image-upload', [App\Http\Controllers\simple_image_upload\ImageUploadController::class,'store']);


Route::get('store_image', [App\Http\Controllers\StoreImageController::class,'index']);

Route::post('store_image/insert_image', [App\Http\Controllers\StoreImageController::class,'insert_image']);

Route::get('store_image/fetch_image/{id}', [App\Http\Controllers\StoreImageController::class,'fetch_image']);

Route::get('posts',[App\Http\Controllers\PostController::class,'allposts']);
Route::get('posts/{id}',[App\Http\Controllers\PostController::class,'viewpost']);
Route::get('postedit/{id}',[App\Http\Controllers\PostController::class,'postedit']);
//Route::post('postupdate',[App\Http\Controllers\PostController::class,'postupdate']);
Route::post('postupdate',[App\Http\Controllers\PostController::class,'postupdate'])->name('post.update');
Route::get('postadd',[App\Http\Controllers\PostController::class,'postadd']);
Route::post('postinsert',[App\Http\Controllers\PostController::class,'postinsert'])->name('post.insert');
Route::get('postdelete/{id}',[App\Http\Controllers\PostController::class,'postdelete']);
Route::post('postremove',[App\Http\Controllers\PostController::class,'postremove'])->name('post.delete');