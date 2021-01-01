<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    public function teacher()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }


    public function product(){
        return $this->hasMany('App\Models\Product');
    }

    public function residence(){
        return $this->hasOne('App\Models\residence');
    }


}
