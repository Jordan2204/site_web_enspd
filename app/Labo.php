<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labo extends Model 
{

    protected $table = 'labo';
    public $timestamps = true;
    protected $fillable = ['nomLabo','description','objectif','strucRattach'
    ];

    public function partenaireLabo()
    {
        return $this->hasMany('PartenaireLabo');
    }

    public function personnel()
    {
        return $this->hasMany('Personnel');
    }

    public function media()
    {
        return $this->hasOne('Media');
    }

}