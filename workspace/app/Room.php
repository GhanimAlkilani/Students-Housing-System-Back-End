<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['student_id', ];

    public function student() {
        return $this->belongsTo('App\User', 'student_id', 'id');
    }
}
