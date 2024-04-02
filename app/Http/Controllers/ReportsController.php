<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function reports()
    {
        return view('reports.index');
    }

    public function reportsview()
    {
        return view('reports.reportsview');
    }
}
