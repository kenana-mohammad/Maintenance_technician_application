<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(3);
        return view('backend.users.index',compact('user'));
    }

}
