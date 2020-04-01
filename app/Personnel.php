<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
	protected $table = 'personnel';
  	public $timestamps = true;
    protected $fillable = [
        'matPers','gradePers','nomPers','prenomPers','postePers','lieuDeServicePers','Departement_idDepartement','Labo_idLabo','media_id'
    ];

    public function departement()
    {
        return $this->belongsTo('Departement');
    }

    public function labo()
    {
        return $this->belongsToMany('Labo');
    }
}
