<?php


namespace Mtigdemir\Address\Models;


use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    public function city(){
        return $this->belongsTo('Mtigdemir\Address\Models','id','il_id');
    }
}