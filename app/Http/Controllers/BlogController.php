<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBlogs = Blog::all();
        return view('all-blogs', compact('allBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_link' => 'required',
            'status' => 'required'
        ]);
        $formFields['title'] = strip_tags($formFields['title']);
        $formFields['description'] = strip_tags($formFields['description']);
        $formFields['image_link'] = strip_tags($formFields['image_link']);
        $formFields['status'] = strip_tags($formFields['status']);

        Blog::create($formFields);
        return redirect('/blogposts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $id)
    {
        return view('single-blog', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogController $blogHandlerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogController $blogHandlerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogController $blogHandlerController)
    {
        //
    }
}
