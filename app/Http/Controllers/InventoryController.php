<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $tableData = Inventory::all();
        
        return view('inventory.index', ['tableData' => $tableData]);
    }

    public function inventory()
    {
        return view('inventory.inventory');
    }
}
