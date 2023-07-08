<?php

namespace App\Http\Controllers;

use App\Gunung;
use Illuminate\Http\Request;

class GunungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gunungs = Gunung::all();
        // dd($gunungs->all());

        return view('gunung.index', compact('gunungs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $fileName = time().'.'.$request->thumbnail->extension();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function show(Gunung $gunung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function edit(Gunung $gunung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gunung $gunung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gunung  $gunung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gunung $gunung)
    {
        //
    }
}
