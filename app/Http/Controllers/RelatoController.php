<?php

namespace App\Http\Controllers;

use App\Models\Relato;
use Illuminate\Http\Request;

class RelatoController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        $relato = new Relato;

        $relato->first_name = $request->first_name;
        $relato->last_name = $request->last_name;
        $relato->email = $request->email;
        $relato->when_it_happened = $request->when_it_happened;
        $relato->how_long = $request->how_long;
        $relato->how_many = $request->how_many;
        $relato->allien_description = $request->allien_description;
        $relato->what_they_did = $request->what_they_did;
        $relato->fang_spotted = $request->fang_spotted;
        $relato->other = $request->other;

        $relato->save();



        return view('confirmacao',compact('relato'));
    }
}
