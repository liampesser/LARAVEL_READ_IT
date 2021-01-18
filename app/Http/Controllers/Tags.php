<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tags extends Controller
{
    //
    $tags = Tag::orderBy('name', 'ASC')
    ->get();
    return view('tags.index', compact(tags))
}
