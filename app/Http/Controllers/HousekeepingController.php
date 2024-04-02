<?php

namespace App\Http\Controllers;
use App\Models\Housekeeping;
use App\Models\Settings;
use Illuminate\Http\Request;

class HousekeepingController extends Controller
{
    //
    public function index()
    {
        $tableData = Settings::all();
        // return view('housekeeping.index');
        
        return view('housekeeping.index', ['tableData' => $tableData]);
    }
}
