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

    public function createNewGenre()
    {
        return view('admin.create-genre-form');
    }

    // Retrieve the data that is send through the create new genre form
    public function storeNewGenre(Request $request, Genre $admin)
    {
        validator(
            $request->all('name'),
            ['name' => 'required | min:6 | max:20'],
            [
                'required' => 'Mate this field is required Yeah',
                'min' => 'It has to be 6 letters long',
                'max' => 'Ok listen up brev which genre is longer than 20 characters u lil shit'
            ]
        )->validateWithBag('addingGenreForm');
        $genre = $admin;
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

        validator(
            $request->only(['title', 'description', 'genres']),
            [
                'title' => 'required|min:10 | max:255',
                'description' => 'required | min:20 | max:255',
                'genres' => 'required',
                'image' => 'nullable'
            ],
            [
                'title.required' => 'Oi! You need to provide a title, mate.',
                'title.unique' => 'This title? It’s already taken, savvy?',
                'title.min' => 'A title needs to be at least 10 characters long, capisce?',
                'title.max' => 'Keep it under 255 characters, yeah?',
                'description.required' => 'Listen up! Description is required, no excuses.',
                'description.min' => 'You gotta give at least 20 characters for the description, understood?',
                'description.max' => 'Don’t ramble on; keep it within 255 characters.',
                'genres.required' => 'You must choose a genre from the list, got it?',
            ],
        )->validateWithBag('adminUpdateBlogs');

        $blog = $admin;

        $blog->title = $request->input('title');
        $blog->user_id = auth()->user()->id;
        $blog->description = $request->input('description');
        $file = $request->file('image');
        if (isset($file)) {
            $orginalName = $file->getClientOriginalName();
            $path = $file->storeAs('images', $orginalName, 'public');
            $blog->image = $path;
        }
        $blog->status = $request->input('status');


        $blog->update();

        $genreUpdate = $request->input('genres');
        $blog->genres()->sync($genreUpdate);
        return redirect()->route('admin.all.blogs.overview');
    }

    public function updateStatus(Request $request, Blog $admin)
    {

        $blog = $admin;


        validator(
            $request->only(['status']),
            ['status' => ' required|boolean'],
        )->validate();


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
