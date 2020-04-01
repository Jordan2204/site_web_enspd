<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concours extends Model 
{

    protected $table = 'concours';
    public $timestamps = true;

    public function etudiantConcours()
    {
        return $this->belongsToMany('EtudiantConcours');
    }

}