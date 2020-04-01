<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel_TypePersonnel extends Model
{
	protected $table = 'typepersonnel_personnel';
    protected $fillable = ['TypePersonnel_idTypePersonnel','Personnel_idPers'];
}
