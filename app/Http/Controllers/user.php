<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;


class user extends Controller
{
    public function create(){
        //,compact('User')
        return view('user.create');
    }
    public function store(Request $request )
    
    {
        $user = new user();
        $user ->nombres = $request -> nombres;
        $user ->email = $request -> email;
        $user ->contrasena = $request -> contrasena;
    }

    public function index(User $model){
       $user = ModelsUser::orderBy('name','ASC')->get();
        return view('user.index',$user);
    }
}
