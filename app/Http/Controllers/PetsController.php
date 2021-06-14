<?php

namespace App\Http\Controllers;

use App\Models\Pet;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name')->with('client')->limit(10)->get();

        //really not 100% sure about this line, but it appears to subtract the value from input on line 19 in pets.blade.php
        $query = \Request::get('search');
        //creates new query
        $search = Pet::orderBy('name', 'asc')->where('name', 'like', '%'.$query.'%')->limit(10)->get();


        return view('pets/pets', compact('pets', 'search'));
    }

    public function details($id)
    {
        $details = Pet::with('client')->findOrFail($id);

        // DB::table('users')->where('id', '>', 1)->get();

        // dd($details);
        

        return view ('pets/petsdetails', compact('details'));
    }
}