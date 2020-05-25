<?php

namespace App\Http\Controllers;

use App\form_table;
use Illuminate\Http\Request;

class accessors extends Controller
{
    public function index(){
        return form_table::all();
    }
    public function mutator(){
        $form_table = new form_table();

    }
}
