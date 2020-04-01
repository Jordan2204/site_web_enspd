<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insolite extends Model 
{

    protected $table = 'insolites';
    public $timestamps = true;

    public function media()
    {
        return $this->hasOne('Media');
    }

}