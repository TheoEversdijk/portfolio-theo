<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * shows feedback blog post
     */

    public function show()
    {
        return view('blog/feedback');
    }
}
