<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatoController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $name = $request->first_name;



    }
}
