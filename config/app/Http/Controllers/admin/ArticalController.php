<?php

namespace App\Http\Controllers\admin;

use App\Charts\InfoFormChart;
use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Blog;
use App\Models\Card;
use App\Models\Category;
use App\Models\InfoForm;
use App\Models\Product;
use App\Models\Project;
use App\Models\SubCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticalController extends Controller
{

    public function dashboard(InfoFormChart $chart)
    {
        $product = Product::count();
        $category = Category::count();
        $subCategory = SubCategory::count();
        $testimonial = Testimonial::count();
        $project = Project::count();
        $blog = Blog::count();
        $formData = InfoForm::all();


        $chart->labels(['Date', 'Time', 'Name', 'Phone', 'Email', 'Message']);
        $chart->dataset('Form Data', 'bar', [InfoForm::count('date'), InfoForm::count('time'), InfoForm::count('name'), InfoForm::count('phone'), InfoForm::count('email'), InfoForm::count('message')]);


        return view('dashboard', compact('product', 'category', 'subCategory', 'testimonial', 'project', 'blog', 'formData', 'chart'));
    }
}
