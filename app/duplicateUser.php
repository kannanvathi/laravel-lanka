<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duplicateUser extends Model
{
    protected $table = 'users';

    function usages(){
        return $this->hasMany('App\duplicateUsage', 'users_id', 'id');
    }
}
