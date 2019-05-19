<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function room() {
        return $this->hasOne('App\Room', 'student_id', 'id');
    }

    public function complaints() {
        return $this->hasMany('App\Complaint', 'student_id', 'id');
    }
    
    public function maintenance_requests() {
        return $this->hasMany('App\MaintenanceRequest', 'student_id', 'id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
