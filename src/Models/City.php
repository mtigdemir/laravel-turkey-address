<?php

namespace Mtigdemir\Address\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'iller';

    public function towns(){
        return $this->hasMany('Mtigdemir\Address\Models\Town','il_id','id');
    }
}