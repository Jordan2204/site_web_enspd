<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model 
{

    protected $table = 'news';
    protected $fillable = ['categories','NumPos','pos','url'];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function media()
    {
        return $this->hasOne('Media');
    }

}