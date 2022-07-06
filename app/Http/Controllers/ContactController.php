<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view ('dashboards')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create(request $request)
    {
        $new = Contact::create($this->validateProject($request));
        $contacts = Contact::all();
        return view ('dashboards')->with('contacts', $contacts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Validate the inputs
     *
     * @param Request $request request
     * @return array
     */
    private function validateProject(Request $request): array
    {
        return $request->validate([
            'name' => 'required|min:3'
        ],
            [
                'name.required' => 'Een naam is vereist',
                'name.min' => 'De naam moet minimaal drie tekens lang zijn',
            ]
        );
    }
}
