<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function form () {
      return view('contacts.form');
    }
}
