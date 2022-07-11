<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $path = public_path('img\uploaded');
        $files = \File::files($path);

        return view('welcome', compact('files'));
    }

    /**
     * Return json response with image
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img\uploaded'), $imageName);
        return response()->json(['success'=>$imageName]);
    }
}
