<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * shows main page
     */

    public function show()
    {
        return view('welcome');
    }
}
