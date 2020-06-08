<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','address','contact'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function applications()
    {
        return $this->hasMany('App\Application');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

}
