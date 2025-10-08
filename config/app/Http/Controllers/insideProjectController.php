<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class insideProjectController extends Controller
{
    public function insideProject($project)
    {
        $project = Project::findOrFail($project);
        $insideProjectProducts = Product::all();
        $firstThreeHomeProducts = $insideProjectProducts->take(3);
        $nextThreeHomeProducts = $insideProjectProducts->slice(3, 3);
        return view('insideprojects', compact('project', 'firstThreeHomeProducts', 'nextThreeHomeProducts'));
    }
}