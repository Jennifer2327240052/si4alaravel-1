<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //cara 1 : sql query
        $mahasiswaprodi = DB::select('')
        return view('dasboard.index', compact('mahasiswaprodi'));
    }
}
