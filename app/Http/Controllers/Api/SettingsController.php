<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingsController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorizeResource(User::class);
    // }

    public function store(Request $request)
    {
        $setting = Settings::create($request->validate([
            'name'       => '',
            'type'       => '',
            'area'      => '',
            'maxoccupancy'      => '',
            'occupancy'     => '',
            'adult'       => '',
            'children'       => '',
            'description'       => ''
        ]));

        return Response::api('Room type added successfully', headers: [
            'x-location' => route('roomsettings', $setting)
        ]);
    }



    public function test(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);
    
        return response()->json('Room type added successfully');
    }



    
}
