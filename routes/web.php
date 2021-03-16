<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;

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

Route::get('/', function () {//Ruta principal
    return view('welcome');
})->name('home');

/*Route::get('/test', function(){ //Ruta basica 
    return 'Hola mundo';
});


Route::get('/hola/{name?}', function($name = 'Juan'){ // ruta basica con parametro opcional
    return 'Hola '. $name .' conocenos: <a href="'.route('nosotros').'">Nosotros</a>';
});

Route::get('/sobre-nosotros-en-la-web', function () {
    return '<h1>Toda la información sobre nosotros</h1>';
})->name('nosotros');

Route::get('home/{name?}/{apellido?}', function ($name="Juan",$apellido="Gonzalez") {
    //return view('home')->with('Nombre',$name)->with('Apellido', $apellido);
    $post=["post1","post2","post3","post4","post5"];
    $post2=[];
    return view('home',['nombre'=>"$name",'apellido'=> "$apellido",'post'=>$post ,'post2'=>$post2]);
})->name("home");

Route::get('/post',[PostController::class, 'index']);*/

Route::resource('dashboard/post', PostController::class);
Route::post('dashboard/post/{post}/image',[PostController::class,'image'])->name('post.image');
Route::resource('dashboard/category', CategoryController::class);
Route::resource('dashboard/user', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
