<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserControl extends Controller
{
    public function show()
    {
        $user = Auth::user();
        if ($user) {
            // Return a view and pass the user data
            return view('aboutme', ['user' => $user]);
        } else {
            // Optionally, you could redirect or show a different view if the user is not found
            return redirect('/')->with('error', 'User not found');
        }
    }
    public function usergreet()
    {
        $user = Auth::user();
        if ($user) {
            // Return a view and pass the user data
            return view('layouts.app', ['user' => $user]);
        } else {
            // Optionally, you could redirect or show a different view if the user is not found
            return redirect('/')->with('error', 'User not found');
        }
    }
}
