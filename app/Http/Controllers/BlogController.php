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
        //
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
