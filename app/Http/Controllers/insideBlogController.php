<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insideBlogController extends Controller
{
    public function insideBlog()
    {
        return view('insideblog');
    }
}