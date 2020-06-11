<?php

namespace App;

// instead of extending laravel base model...
// use Illuminate\Database\Eloquent\Model;

// ... we are extending our own base model
class Channel extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
