<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('all-blogs');
    }

    public function singleBlog($id)
    {
//        dd($id);
        return view('single-blog',
            ['blogId' => $id]
        );
    }

}
