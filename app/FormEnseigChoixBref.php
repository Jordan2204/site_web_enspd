<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormEnseigChoixBref extends Model 
{

    protected $table = 'formEnseigChoixBref';

    protected $fillable = [
    	'codeFECB','titreFECB','contenuFECB',
    ];

    public $timestamps = true;

    public function media()
    {
        return $this->hasOne('Media');
    }

}