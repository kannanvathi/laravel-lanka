<?php

namespace App\Http\Controllers;

use App\form_table;
use Illuminate\Http\Request;

class routeBinding extends Controller
{
    public function index(form_table $item){
        return $item;
    }
}
