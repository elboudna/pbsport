<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //

    public function index()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }

    public function store(Request $request)
    {
    }

    public function supprimer($id)
    {
    }

    public function modifier(Request $request, $id)
    {
    }

    

}
