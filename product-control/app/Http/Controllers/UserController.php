<?php

namespace App\Http\Controllers;

use App\repository\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $u = new UserRepository();
        $users = $u->show();

        return view('users.index', compact('users'));


    }
}
