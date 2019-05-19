<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    public function student() {
        return $this->belongsTo('App\User', 'student_id', 'id');
    }
}
