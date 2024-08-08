<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function homepage(){
        $blogovi = Blog::all();
        return view("homepage", [ 'blogovi'=>$blogovi ]);
    }
    
    function blog($id){
        $blog = Blog::find($id);
        if(!$blog){
            abort(404); //not found
        }
        return view("blog", [ 'blog'=>$blog ]);
    }
    
}
