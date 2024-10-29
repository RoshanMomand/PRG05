<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return de view voor admin
        return view('admin.index');
    }

    public function allBlogsIndex()
    {
        $allBlogs = Blog::all();
        return view('admin.all-blogs-overview', compact('allBlogs'));
    }

    public function allGenresIndex()
    {
        $allGenres = Genre::all();
        return view('admin.all-genres-overview', compact('allGenres'));
    }

    public function allUserIndex()
    {
        $allUsers = User::all();
        return view('admin.all-users-overview', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function createNewGenre()
    {
        return view('admin.create-genre-form');
    }

    // Retrieve the data that is send through the create new genre form
    public function storeNewGenre(Request $request, Genre $admin)
    {
        $genre = $admin;

        $request->validate([
            'name' => 'required'
        ]);
        $genre->name = $request->input('name');
        $genre->save();
        return redirect()->route('admin.all.genres.overview');
    }

    /**
     * Delete the genre
     */

    public function deleteGenre(Genre $admin)
    {
        $genre = $admin;
        $genre->delete();
        return redirect()->route('admin.all.genres.overview');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $admin)
    {
        $singleBlog = $admin;
        return view('single-blog', compact('singleBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $admin)
    {
        $genreValues = Genre::all();
        // edit pagina maken voor admin
        return view('admin.admin-edit', compact('genreValues', 'admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $admin)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genres' => 'required|array'
        ]);


        $admin->title = $request->input('title');
        $admin->user_id = auth()->user()->id;
        $admin->description = $request->input('description');
        $file = $request->file('image');
        if (isset($file)) {
            $orginalName = $file->getClientOriginalName();
            $path = $file->storeAs('images', $orginalName, 'public');
            $admin->image = $path;
        }
        $admin->status = $request->input('status');


        $admin->update();

        $genreUpdate = $request->input('genres');
        $admin->genres()->sync($genreUpdate);
        return redirect()->route('admin.all.blogs.overview');
    }

    public function updateStatus(Request $request, Blog $admin)
    {

        $blog = $admin;

        $request->validate([
            'status' => 'required|boolean',
        ]);


        // Update de status
        $blog->status = $request->input('status');
        $blog->save();

        // Redirect terug naar de vorige pagina met een succesmelding
        return redirect()->route('admin.all.blogs.overview');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $admin)
    {
        $admin->delete();
        return redirect()->route('admin.all.blogs.overview');
    }
}
