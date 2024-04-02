<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InventoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorizeResource(User::class);
    // }

    public function store(Request $request)
    {
        $inventory = Inventory::create($request->validate([
            'name'       => '',
            'status'       => '',
            'image'      => '',
            'article_number'      => '',
            'occupancy'     => '',
            'description'       => ''
        ]));

        return Response::api('Room type added successfully', headers: [
            'x-location' => route('inventory', $inventory)
        ]);
    }

}


