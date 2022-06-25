<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * shows blog
     */

    public function show()
    {
        abort(500);
        return view('blog/blog');
    }
}
