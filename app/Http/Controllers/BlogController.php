<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Genre;
use App\Models\UserLogin;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBlogs = Blog::where('status', 1)->get();
        $allGenres = Genre::all();
        return view('all-blogs', compact('allBlogs', 'allGenres'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Blog $blogpost)
    {

        $userLogins = UserLogin::all()->where('user_id', auth()->user()->count());

        if (auth()->check()) {
            $genreValues = Genre::all();
            return view('create-blog-form', compact('genreValues', 'userLogins'));
        }
        return redirect('/');
    }

    public function search(Request $request)
    {
//
        $search = $request->input('search-term');
        $genreSearch = $request->input('genres');
        $query = Blog::query();

        if (isset($search)) {
            $query->WhereAny(['title', 'description'], 'LIKE', "%$search%");
        }

        if (isset($genreSearch)) {
            $query->WhereHas('genres', function ($genreQuery) use ($genreSearch) {
                $genreQuery->where('id', $genreSearch);
            });
        }

        $allBlogs = $query->get();
        $allGenres = Genre::all();
        return view('all-blogs', compact('allBlogs', 'allGenres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Blog $blog)
    {
//        $formFields['title'] = strip_tags($formFields['title']);
//        $formFields['description'] = strip_tags($formFields['description']);
//        $formFields['image_link'] = strip_tags($formFields['image_link']);
//        $formFields['status'] = strip_tags($formFields['status']);
//        Blog::create($formFields);
        // $product->user_id = auth()->user()->id
        validator(
            $request->only(['title', 'description', 'image', 'genres']),
            [
                'title' => 'required|unique:blogs,title|min:10|max:255',
                'description' => 'required|min:20|max:255',
                'image' => 'required',
                'genres' => 'required|min:1'
            ],
            [
                'title.required' => 'Listen up! You can’t leave the title empty, that won’t fly!',
                'title.unique' => 'That title’s been claimed already; find yourself a fresh one!',
                'title.min' => 'A title needs a solid 10 characters, none of that short stuff!',
                'title.max' => 'Keep that title under 255 characters, we’re not writing a novel here!',

                'description.required' => 'Oi! A description is non-negotiable, don’t skip it!',
                'description.min' => 'You’re gonna need at least 20 characters for that description, savvy?',
                'description.max' => 'Keep it concise; 255 characters is the limit, got it?',

                'image.required' => 'An image is a must, don’t leave that out, mate!',
                'genres.required' => 'You gotta choose a genre, or we can’t proceed, understand?',
                'genres.min' => 'At least one genre needs to be picked, capisce?',
            ]
        )->validateWithBag('userCreateErrors');
        $blog->title = $request->input('title');
        $blog->user_id = auth()->user()->id;
        $blog->description = $request->input('description');
        $file = $request->file('image');
        $orginalName = $file->getClientOriginalName();
        $path = $file->storeAs('images', $orginalName, 'public');
        $blog->image = $path;


        $blog->save();


        $genres = $request->input('genres');
        $blog->genres()->attach($genres);

        return redirect()->route('blogposts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blogpost)
    {
        $singleBlog = $blogpost;
        return view('single-blog', compact('singleBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blogpost)
    {

        $genreValues = Genre::all();
        if (auth()->check() && $blogpost->user_id === auth()->user()->id) {
            return view('edit-blog-form', compact('blogpost', 'genreValues'));
        } else {
            return redirect()->route('blogposts.index');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blogpost)
    {
        validator(
            $request->only(['title', 'description', 'genres']),
            [
                'title' => 'required|min:10|max:255',
                'description' => 'required|min:20|max:255',
                'genres' => 'required|min:1'
            ],
            [
                'title.required' => 'Oi! You need to provide a title, no slacking off!',
                'title.min' => 'A title must be at least 10 characters long, understood?',
                'title.max' => 'Keep that title under 255 characters, savvy?',

                'description.required' => 'Listen up! A description is essential, don’t skip it.',
                'description.min' => 'You gotta give at least 20 characters for the description, alright?',
                'description.max' => 'Don’t ramble on; keep it within 255 characters, yeah?',

                'genres.required' => 'You must pick a genre from the list; we need to know your flavor, right?',
                'genres.min' => 'Pick at least one genre, capisce?',
            ]
        )->validateWithBag('userUpdateBlog');

        $blogpost->title = $request->input('title');
        $blogpost->user_id = auth()->user()->id;
        $blogpost->description = $request->input('description');
        $file = $request->file('image');
        if (isset($file)) {
            $orginalName = $file->getClientOriginalName();
            $path = $file->storeAs('images', $orginalName, 'public');
            $blogpost->image = $path;
        }


        $blogpost->update();

        $genreUpdate = $request->input('genres');
        $blogpost->genres()->sync($genreUpdate);

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
