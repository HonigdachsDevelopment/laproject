<?php

namespace App;


class Project extends Model
{

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

}
