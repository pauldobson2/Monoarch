<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guideController extends Controller
{
    public function guideIndex(){
        return view('guide');
    }
}
