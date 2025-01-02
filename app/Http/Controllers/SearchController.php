<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        if ($searchQuery) {
            $trips = Trip::where('destinace', 'like', '%' . $searchQuery . '%')->get();
        } else {
            $trips = Trip::all();
        }

        return view('trips.index', compact('trips'));
    }
}
