<?php

namespace App;


class Account extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
