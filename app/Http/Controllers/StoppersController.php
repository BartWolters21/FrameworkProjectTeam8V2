<?php

namespace App\Http\Controllers;

use App\Models\Stoppers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoppersController extends Controller
{
    public function index()
    {
        $stoppers = Stoppers::latest()->get();

        return view('stoppers.index', compact('stoppers'));
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $stoppers = Stoppers::where('description', 'LIKE', '%'.$search_text.'%')->get();

        return view('stoppers.search', compact('stoppers'));
    }
}
