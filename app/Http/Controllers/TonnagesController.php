<?php

namespace App\Http\Controllers;

use App\Models\Tonnages;
use Illuminate\Http\Request;

class TonnagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tonnages.index',[
            'tonnages'=>Tonnages::latest()->get(),
            'tonnagesMinOutputTones' => Tonnages::latest()->get()->where('output_tones', Tonnages::latest()->get()->min('output_tones'))->first()->output_tones,
            'tonnagesMaxOutputTones' => Tonnages::latest()->get()->where('output_tones', Tonnages::latest()->get()->max('output_tones'))->first()->output_tones,
            'tonnagesMinOutputMeters' => Tonnages::latest()->get()->where('output_metres', Tonnages::latest()->get()->min('output_metres'))->first()->output_metres,
            'tonnagesMaxOutputMeters' => Tonnages::latest()->get()->where('output_metres', Tonnages::latest()->get()->max('output_metres'))->first()->output_metres,
        ]);
    }
}
