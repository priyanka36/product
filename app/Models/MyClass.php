<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
public function subject(){
    return $this->hasMany('App/Models/Subject','my_class_id');
}
    public function section()
    {
        return $this->belongsToMany(Section::class,'my_class_section','my_class_id','section_id');
    }
}
