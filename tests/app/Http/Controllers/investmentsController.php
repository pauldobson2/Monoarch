<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class investmentsController extends Controller
{
    public function investments()
    {
        $investmentCategories = Category::all();
        $investmentProducts = Product::get();
        return view('investments', compact('investmentProducts', 'investmentCategories'));
    }
}