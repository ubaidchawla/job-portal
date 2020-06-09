<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function job()
    {
        return $this->belongsTo('App\Job');
    }
}
