<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * shows dashboard
     */

    public function show()
    {
        return view('dashboards');
    }
}
