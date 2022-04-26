<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;

class ContributeController extends Controller
{
    public function index()
    {
        return view('contribute');
    }

    /**
     * Store a new doc in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate!
        $this->validate($request, [
            'title' => 'required|unique:docs|max:255',
            'category' => 'required|max:255',
            'body' => 'required',
            'imgURL' => 'max:255'
        ]);

        $request->user()->docs()->create([
            'title' => $request->title,
            'category' => strtolower($request->category),
            'body' => $request->body,
            'imgURL' => $request->imgURL
        ]);

        return back();
    }
}
