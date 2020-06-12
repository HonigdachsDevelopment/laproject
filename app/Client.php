<?php

namespace App;


class Client extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
