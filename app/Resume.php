<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
