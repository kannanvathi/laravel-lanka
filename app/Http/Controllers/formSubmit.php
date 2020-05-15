<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formSubmit extends Controller
{
    function index(Request $req){
        $data = $req->input();
        DB::table('users')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ]);
        return $data;
    }
}
