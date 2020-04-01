<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministrationCentrale extends Model 
{

    protected $table = 'administrationCentrale';
    public $timestamps = true;

    public function media()
    {
        return $this->hasOne('Media');
    }

}