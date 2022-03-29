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
        Doc::create([
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
        ]);

        return back();
    }
}
