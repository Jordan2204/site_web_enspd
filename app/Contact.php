<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';

    public $timestamps = true;

    protected $fillable = ['nom','messageV','objet','email','tel'
    ];


}