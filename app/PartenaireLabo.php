<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartenaireLabo extends Model 
{

    protected $table = 'partenairesLabo';
    public $timestamps = true;
    protected $fillable = ['raison_socialePLabo','villePLabo','idLabo'];

    public function labo()
    {
        return $this->belongsTo('Labo');
    }

}