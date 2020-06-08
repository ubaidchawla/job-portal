<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['regno','fullname','email','username','password','phone','university'];
    public function applications()
    {
        return $this->hasMany('App\Application');
    }

    public function resumes()
    {
        return $this->hasMany('App\Resume');
    }
}
