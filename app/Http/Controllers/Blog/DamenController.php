<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class DamenController extends Controller
{
    /**
     * shows Damen blog post
     */

    public function show()
    {
        return view('blog/damen');
    }
}
