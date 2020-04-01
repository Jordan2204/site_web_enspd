<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMedia extends Model 
{

    protected $table = 'typeMedia';
    public $timestamps = true;

    public function media()
    {
        return $this->hasMany('Media');
    }

}