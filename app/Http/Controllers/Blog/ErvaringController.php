<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class ErvaringController extends Controller
{
    /**
     * shows ervaring blog post
     */

    public function show()
    {
        return view('blog/ervaring');
    }
}
