<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

// ROUTE PAR DEFAUT
// PATTERN : /
// CTRL : Posts
// ACTION :index
Route::get('/', [Posts::class, 'index'])->name('blog');

// ROUTE PAR DES POSTS
// PATTERN : /posts
// CTRL : Posts
// ACTION :index
Route::get('/', [Posts::class, 'index'])->name('posts.index');
