<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $docs = Doc::all();
        return view('home', ['docs' => $docs]);

        //TODO return instead a array of doc lists where each entry is first sorted by category
    }
}
