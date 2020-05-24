<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_table extends Model
{
    public function getNameAttribute($value){
        return ucfirst($value);
    }
    public function getPasswordAttribute($value){
        return ucfirst($value);
    }
    public function setNameAttribute($value){
        return $this->attributes['name'] = ucfirst($value);
    }
    public function setPasswordAttribute($value){
        return $this->attributes['password'] = lcfirst($value);
    }
}
