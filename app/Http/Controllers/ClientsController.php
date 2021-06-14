<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index()
    {
        //
    }

    public function details($id)
    {
        $client = Client::where('id', '=', $id)->get();

        return view('clients.clientsdetails', compact('client'));
    }
}
