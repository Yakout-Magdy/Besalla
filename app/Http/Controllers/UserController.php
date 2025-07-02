<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAll()
    {
        $users = User::all();
        return response()->json($users);
    }
}
