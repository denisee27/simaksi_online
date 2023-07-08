<?php

namespace App\Http\Controllers;

use App\Jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jalur = Jalur::where('gunungs_id', '1')->get();

        dd($jalur);

        // $jalur = new Jalur;

        // $jalur->nama_jalur  = "Jalur jalan Sama - sama" ;
        // $jalur->harga = 12000 ;
        // $jalur->gunungs_id = 2 ;

        // $jalur->save();
        // dd($jalur);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function show(Jalur $jalur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function edit(Jalur $jalur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jalur $jalur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jalur  $jalur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jalur $jalur)
    {
        //
    }
};
