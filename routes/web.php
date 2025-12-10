<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//get

Route::get('/', function() {
    return view('inici'); // Canviat de 'welcome' a 'inici'
})->name('inici');

Route::get('/posts', function(){
    return view('posts.llistat');
})->name('posts_llistat');

Route::get('/posts/{id}', function($id){
    return view('posts.fitxa', ['id' => $id]);
})->where('id', '[0-9]+')->name('posts_fitxa');

//resource

Route::resource('/posts', PostController::class)
    ->only(['index', 'show', 'create', 'edit']);