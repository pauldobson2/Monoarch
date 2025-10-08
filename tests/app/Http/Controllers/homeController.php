<?php

namespace App\Http\Controllers;

use App\Models\AvailabilityProject;
use App\Models\Product;
use App\Models\Project;
use App\Models\Testimonial;

class homeController extends Controller
{
    public function home()
    {
        // Testimonial
        $testimonials = Testimonial::all();
        // Projects with categories
        $luxuryApartmentProjects = Project::where('project_category_id', 'Luxury Apartment')->take(2)->get();
        $corporateOfficeProjects = Project::where('project_category_id', 'Corporate Office')->take(2)->get();
        $commericalShopsProjects = Project::where('project_category_id', 'Commercial Shops')->take(2)->get();
        $foodCourtsProjects = Project::where('project_category_id', 'Food Courts')->take(2)->get();
        $farmHouseProjects = Project::where('project_category_id', 'Farm Houses')->take(2)->get();

        // Availability of space in our project
        $availabilityOfProjects = AvailabilityProject::take(5)->get();
        // Products
        $homeProducts = Product::all();
        $firstThreeHomeProducts = $homeProducts->take(3);
        $nextThreeHomeProducts = $homeProducts->slice(3, 3);

        // return
        return view('home', compact('firstThreeHomeProducts', 'nextThreeHomeProducts', 'testimonials', 'luxuryApartmentProjects', 'corporateOfficeProjects', 'commericalShopsProjects', 'foodCourtsProjects', 'farmHouseProjects', 'availabilityOfProjects', 'homeProducts'));
    }
}