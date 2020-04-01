<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communiquer extends Model 
{

    protected $table = 'communiquer';
	protected $fillable = ['contenuCom'];
    public $timestamps = true;

}