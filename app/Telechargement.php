<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telechargement extends Model 
{

    protected $table = 'telechargements';
    public $timestamps = true;

    public function media()
    {
        return $this->hasOne('Media');
    }

}