<?php

namespace App\Model;

use App\Model;
use App\User;

class Account extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

}
