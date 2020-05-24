<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilder extends Controller
{
    function index(){
        /*$data = DB::table('Users')->find(2);*/
        /*$data = DB::table('Users')->count(2);*/
       /* $data = DB::table('Users')->insert([
            'name' => 'bharathi',
            'password' => 'vickyshree',
            'email' => 'email@email.com'
        ]);*/
       /* $data = DB::table('Users')
            ->where('id', '4')
            ->update([
            'name' => 'bharathikannan',
            'password' => 'Vickyshree123#',
            'email' => 'kannanvathi@gmail.com'
        ]);*/
        $data = DB::table('Users')->paginate(1);

        return view('queryBuilder', ['data' => $data]);
    }
    function joinData(){
        $data = DB::table('users')
            ->join('usages', 'users.id', 'usages.users_id')
            ->select('category', 'name', 'brand')
            ->get();
        echo "<pre>";
        print_r($data);
    }
}
