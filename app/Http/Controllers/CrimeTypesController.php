<?php

namespace App\Http\Controllers;

use App\CrimeTypes;
use Illuminate\Http\Request;

class CrimeTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CrimeTypes::all();
        return view('admin.pages.crime_types.index',['types' => $types]);
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
     * @param  \App\CrimeTypes  $crimeTypes
     * @return \Illuminate\Http\Response
     */
    public function show(CrimeTypes $crimeTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrimeTypes  $crimeTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(CrimeTypes $crimeTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrimeTypes  $crimeTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrimeTypes $crimeTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrimeTypes  $crimeTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrimeTypes $crimeTypes)
    {
        //
    }
}
