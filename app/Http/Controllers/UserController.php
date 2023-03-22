<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        if($users.'rol' == '1'){
        return view('useradmin.index', compact('users'));
        }
    }
}
