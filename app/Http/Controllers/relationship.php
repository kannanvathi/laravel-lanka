<?php

namespace App\Http\Controllers;

use App\duplicateUser;
use Illuminate\Http\Request;

class relationship extends Controller
{
    function one(){
        return duplicateUser::find(2)->usages;
    }
}
