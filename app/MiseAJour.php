<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiseAJour extends Model 
{

    protected $table = 'miseAJours';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User');
    }

}