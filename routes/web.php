<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inici');

Route::get('/posts', function(){
    return "Llistat de posts";
})->name('posts_llistat');

Route::get('/posts/{id}', function($id){
    return "Fitxa del post {$id}";
})->where('id', '[0-9]+')->name('posts_fitxa');