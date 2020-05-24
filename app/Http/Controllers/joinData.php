<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\usages;

class joinData extends Controller
{
    public function index(){
        return usages::all();
        /*echo User::all()->join($usages);*/

}
}
