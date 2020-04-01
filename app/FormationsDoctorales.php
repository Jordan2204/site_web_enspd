<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormationsDoctorales extends Model 
{

    protected $table = 'formationsdoctorale';
    public $timestamps = true;
    protected $fillable = ['titre','contenu'];

}