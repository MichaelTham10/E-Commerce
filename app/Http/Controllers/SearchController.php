<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $attractions = Attraction::where('tempat_wisata','LIKE', '%'.$request->search.'%')
        ->orWhere('provinsi','LIKE','%'.$request->search.'%') ->get();
        return view('welcome', compact('attractions'));
    }
}
