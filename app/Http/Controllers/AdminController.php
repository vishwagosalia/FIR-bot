<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $firs_count = DB::table('firs')->count();
        $type_count = DB::table('crime_types')->count();
        $types = \App\CrimeTypes::all();
        return view('admin.index',['crime_types' => $types,'crime_types_count' => $type_count,'firs' => $firs_count]);
    }
}
