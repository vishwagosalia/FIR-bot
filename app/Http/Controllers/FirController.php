<?php

namespace App\Http\Controllers;

use App\FirModel;
use Illuminate\Http\Request;

class FirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firs = FirModel::all();
        return view('admin.pages.firs.index',['firs' => $firs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate($fir)
    {
        $res = \App\FirModel::find($fir);
        $res->is_authenticated = 1;
        $res->save();
        return redirect()->route('admin.firs.index');
    }

    public function remove($fir)
    {
        $fir = \App\FirModel::find($fir);
        $fir->is_authenticated = 0;
        $fir->save();
        return redirect()->route('admin.firs.index');
    }

    public function getpublicfir() {
        $firs = \App\FirModel::all()->where('is_authenticated',"=","1");
        return view('fir-table',['firs' => $firs]);

    }

    public function getpublicfir_dash() {
        $firs = \App\FirModel::all()->where('is_authenticated',"=","1");
        return view('welcome',['firs' => $firs]);

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
     * @param  \App\FirModel  $firModel
     * @return \Illuminate\Http\Response
     */
    public function show(FirModel $firModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FirModel  $firModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FirModel $firModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FirModel  $firModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirModel $firModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FirModel  $firModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirModel $firModel)
    {
        //
    }
}
