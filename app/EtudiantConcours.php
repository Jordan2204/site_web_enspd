<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantConcours extends Model 
{

    protected $table = 'etudiantConcours';
    public $timestamps = true;

    public function concours()
    {
        return $this->hasOne('Concours');
    }

}