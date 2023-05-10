<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // function to retrive data from users table
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
}

