<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Genre;
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
    public function create(Blog $blogpost)
    {

        $genreValues = Genre::all();
        return view('create-blog-form', compact('genreValues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $formFields['title'] = strip_tags($formFields['title']);
//        $formFields['description'] = strip_tags($formFields['description']);
//        $formFields['image_link'] = strip_tags($formFields['image_link']);
//        $formFields['status'] = strip_tags($formFields['status']);
//        Blog::create($formFields);
        // $product->user_id = auth()->user()->id
        $blog = new Blog();

        $blog->title = $request->input('title');
        $blog->user_id = auth()->user()->id;
        $blog->description = $request->input('description');

//        $blog->genres()->attach($blog->id, ['genre_id']);


        $file = $request->file('image');
        $orginalName = $file->getClientOriginalName();
        $path = $file->storeAs('images', $orginalName, 'public');
        $blog->image = $path;

        $blog->status = $request->input('status');


        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
            'name' => 'required'
        ]);


        $blog->save();
        return redirect()->route('blogposts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blogpost)
    {
        return view('single-blog', compact('blogpost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blogpost)
    {

        $genreValues = Genre::all();
        if (isset(auth()->user()->id) && $blogpost->user_id === auth()->user()->id) {
            return view('edit-blog-form', compact('blogpost', 'genreValues'));
        } else {
            return view('all-blogs');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blogpost)
    {
        $blogpost->title = $request->input('title');
        $blogpost->user_id = auth()->user()->id;
        $blogpost->description = $request->input('description');
//        $blog->genres = $request->input('name');
        $file = $request->file('image');
        $orginalName = $file->getClientOriginalName();
        $path = $file->storeAs('images', $orginalName, 'public');
        $blogpost->image = $path;
        $blogpost->status = $request->input('status');

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $blogpost->update();
        return redirect()->route('blogposts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blogpost)
    {

        $blogpost->delete();
        return redirect()->route('blogposts.index');
    }
}
