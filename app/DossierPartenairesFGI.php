<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DossierPartenairesFGI extends Model 
{

    protected $table = 'dossiers';
    protected $fillable = ['nomDOC','numBCA','infosActu','date_intr','observations','etape'
    ];
    public $timestamps = true;

}
