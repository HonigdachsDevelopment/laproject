<?php

namespace App;

// Overwriting the basic Model of Laravel
use Illuminate\Database\Eloquent\Model as BaseModel;
// Required to create a string uuid in order to we are able to cast with php string casting function
use Illuminate\Support\Str;

class Model extends BaseModel
{
    // turn off BigIncrements by default
    public $incrementing = FALSE;

    // turn off mass-asignment
    protected $guarded = [];
    // custom boot static function to create uuid
    // must be static to be accessable from any instanced child model which extends our baseModel
    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            // create model with uuid IMPORTANT: needs casting with (string) else it will create an object for the id
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }


}
