<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index() {
        
        return view('blogs',[
            'blogs'=>Blog::latest()->filter(request([('search')]))->get(), // eager load lazy loading 
            "categories"=>Category::all()
        ]);
    }
    public function show(Blog $blog)
    {              
     return view("blog",[
        "blog" => $blog, 
        "randomBlogs"=>Blog::inRandomOrder()->take(3)->get()   
     ]
     );
    }
    
    
}
