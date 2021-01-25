<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Contacts;

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

/*Route::get('/', function () {
    return view('template.index');
});*/

    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: Posts
    // ACTION: index
      Route::get('/', [Posts::class, 'index'])->name('blog');

    // LISTE DES POSTS
    // PATTERN: /posts
    // CTRL: Posts
    // ACTION: index
      Route::get('/posts', [Posts::class, 'index'])->name('posts.index');

    // DETAIL D'UN POST
    // PATTERN: /posts/post/slug
    // CTRL: Posts
    // ACTION: show
      Route::get('posts/{post}/{slug}', [Posts::class, 'show'])
        ->where(['post' => '[1-9][0-9]*'])
        ->where(['slug' => '[a-z0-9][a-z0-9\-]*'])
        ->name('posts.show');

    // PAGE CONTACT
    // PATTERN: /contact
    // CTRL: Contacts
    // ACTION: form
      Route::get('/contact', [Contacts::class, 'form'])->name('contacts.form');

    // AJAX MORE POSTS
    // PATTERN: /posts/ajax/more
    // CTRL: Posts
    // ACTION: more
      Route::get('posts/ajax/more', [Posts::class, 'more'])->name('posts.ajax.more');
