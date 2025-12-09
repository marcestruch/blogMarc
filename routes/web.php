<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('inici'); // Canviat de 'welcome' a 'inici'
})->name('inici');

Route::get('/posts', function(){
    return view('posts.llistat');
})->name('posts_llistat');

Route::get('/posts/{id}', function($id){
    return view('posts.fitxa', ['id' => $id]);
})->where('id', '[0-9]+')->name('posts_fitxa');