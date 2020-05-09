<?php

namespace App;

use App\Notifications\RespformResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Respform extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','prenom','poste','email', 'password','auth','date_Auth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new RespformResetPassword($token));
    }

    public function miseAJour()
    {
        return $this->hasMany('MiseAJour');
    }

    public function setPasswordAttribute($password)
    {

        $this->attributes['password'] = bcrypt($password);

    }

}
