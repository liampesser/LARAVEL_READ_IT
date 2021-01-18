<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Post;

class Posts extends Controller
{
    public function index(INT $limit = 10) {
      // $posts = DB::table('posts')
      //            ->join('categories','categorie_id','=','categories.id')
      //            ->orderBy('created_at', 'DESC')
      //            ->take(10)
      //            ->get();

      $posts = Post::orderBy('created_at', 'DESC')
                   ->take($limit)
                   ->get();

      return view('posts.index', compact('posts'));
    }
    public function show (Post $post) {
      return view('posts.show', compact('post'));
    }

}
