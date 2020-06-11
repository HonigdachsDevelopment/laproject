<?php

namespace App;

// we want a simple id for roles
 use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    //
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
