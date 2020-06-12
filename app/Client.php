<?php

namespace App;


class Client extends Model
{
    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function projects(){
        return $this->belongsToMany('App\Project');
    }
}
