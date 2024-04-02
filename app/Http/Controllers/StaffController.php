<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {


        $users = User::admin()->get();

        // dd(\DB::getQueryLog());

        return view('staff.index', compact('users'));
    }
}
