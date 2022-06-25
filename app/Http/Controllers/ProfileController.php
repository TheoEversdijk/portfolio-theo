<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /**
     * shows profile
     */

    public function show()
    {
        return view('profile');
    }
}
