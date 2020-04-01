<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model 
{

    protected $table = 'departement';
    public $timestamps = true;
    protected $fillable = [
        'ABBR','nomDept','respDept','respAcad','respStage','infoDept','description', 'optionDept', 'deboucheDept', 'coursEnLigneDept', 'emploisDuTempsDept', 'contactDept', 'media_id',
    ];

    public function media()
    {
        return $this->hasOne('Media');
    }
    public function personnel()
    {
        return $this->hasMany('Personnel');
    }

}