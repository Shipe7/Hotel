<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        if (! Auth::attempt(request()->only(['email', 'password']), request()->boolean('remember'))) {
            throw ValidationException::withMessages(['email' => 'Invalid login credentials!']);
        }

        $request->session()->regenerate();

        return Response::api('Welcome back...');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Response::api('Goodbye!');
    }
}
