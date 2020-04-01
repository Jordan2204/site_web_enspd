<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembresLabo extends Model 
{

    protected $table = 'membresLabo';
    public $timestamps = true;
    protected $fillable = ['nomMLabo','prenomMLabo','gradeMLabo','lieuMLabo','nomlabo'
    ];

    public function labo()
    {
        return $this->belongsTo('Labo');
    }

    public function typeMembreLabo()
    {
        return $this->belongsTo('TypeMembre');
    }

}