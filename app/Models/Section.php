<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function fee_structure()
    {
        return $this->hasOne('App/Models/Fee_Structure');
    }
}
