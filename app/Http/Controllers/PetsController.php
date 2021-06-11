<?php

namespace App\Http\Controllers;

use App\Models\Pet;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name')->with('client')->limit(10)->get();

        

        return view('pets/pets', compact('pets'));
    }

    public function details($id)
    {
        $details = Pet::with('client')->findOrFail($id);

        // DB::table('users')->where('id', '>', 1)->get();

        // dd($details);
        

        return view ('pets/petsdetails', compact('details'));
    }
}
