<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Shifts;
use App\Models\Stoppers;
use App\Models\Tonnages;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public  function show() {
        return view('welcome', [
            'stoppers' => Stoppers::take(10)->latest()->orderBy('duration', 'desc')->get(),
            'tonnages'=>Tonnages::latest()->get(),
            'shifts'=>Shifts::latest()->get(),
            'graph'=>Graph::latest()->get()
        ]);
        return view('welcome', compact('stoppers'));
    }
}
