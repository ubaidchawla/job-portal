<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function applications()
    {
        return $this->hasMany('App\Application');
    }

    public function resumes()
    {
        return $this->hasMany('App\Resume');
    }
}
