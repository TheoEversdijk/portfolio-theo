<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class SwotController extends Controller
{
    /**
     * shows SWOT blog post
     */

    public function show()
    {
        return view('blog/swot');
    }
}
