<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class StudiekeuzeController extends Controller
{
    /**
     * shows studiekeuze blog post
     */

    public function show()
    {
        return view('blog/studiekeuze');
    }
}
