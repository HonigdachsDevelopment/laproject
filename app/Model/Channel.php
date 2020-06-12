<?php

namespace App\Model;

use App\User;
use App\Model;

class Channel extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
