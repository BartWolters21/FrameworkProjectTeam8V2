<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index()
    {
        $graph = Graph::latest()->get();

        return view('graph.index', compact('graph'));
    }

}
