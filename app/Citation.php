<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model 
{

    protected $table = 'citations';
    public $timestamps = true;
    protected $fillable = [
        'nomAuteur','citationAuteur',
    ];

}