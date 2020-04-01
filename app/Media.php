<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model 
{

    protected $table = 'medias';
    public $timestamps = true;
    protected $fillable = ['titre','nom','chemin','description','id_type'];


    public function typeMedia()
    {
        return $this->belongsTo('TypeMedia');
    }

    public function departement()
    {
        return $this->belongsTo('Departement');
    }

    public function FormEnseigBrefChoix()
    {
        return $this->belongsTo('FormEnseigChoixBref');
    }

    public function insolite()
    {
        return $this->belongsTo('Insolite');
    }

    public function news()
    {
        return $this->belongsTo('News');
    }

    public function tetechargement()
    {
        return $this->hasOne('Telechargement');
    }

    public function laboE3M()
    {
        return $this->belongsTo('LaboE3M');
    }

}