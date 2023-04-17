<?php

namespace App\Http\Controllers;

use App\Models\Gathering;
use Illuminate\Http\Request;

class GatheringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('gathering.index')->with(['gatherings' => Gathering::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gathering = new Gathering();
        $gathering->note = $request->input("note");
        $gathering->save();
        return redirect(route('gathering.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Gathering $gathering)
    {
        return view('gathering.show')->with(['gathering'=>$gathering]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gathering $gathering)
    {
        $gathering->beers = $request->input('beers');
        $gathering->save();
        return $gathering->beers;
    }
}
