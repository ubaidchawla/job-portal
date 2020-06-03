<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function applications()
    {
        return $this->hasMany('App\Application');
    }
}
