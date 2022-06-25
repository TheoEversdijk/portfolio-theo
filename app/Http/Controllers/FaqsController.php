<?php

namespace App\Http\Controllers;

use App\Models\Faqs;

class FaqsController extends Controller
{
    /**
     * shows FAQ
     */

    public function show()
    {
        $faqs = Faqs::all();
        return view('faq', compact('faqs'));
    }
}
