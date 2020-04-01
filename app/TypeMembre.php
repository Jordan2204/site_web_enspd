<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMembre extends Model 
{

    protected $table = 'typeMembre';
    public $timestamps = true;

    public function membreLabo()
    {
        return $this->hasMany('MembreLabo');
    }

}